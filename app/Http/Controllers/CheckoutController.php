<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Coupon;
use App\Product;
use Illuminate\Support\Facades\Auth;
use App\Order;
use App\OrderItem;
use App\Payment;
use App\User;
use App\WaitCart;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    public function execPostRequest($url, $data)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data))
        );
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        //execute post
        $result = curl_exec($ch);
        //close connection
        curl_close($ch);
        return $result;
    }
    public function momo_payment(Request $request)
    {
        $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";
        //$endpoint = "https://test-payment.momo.vn/gw_payment/transactionProcessor";
        // $partnerCode = 'MOMOLLM920220618';
        // $accessKey = '2u8NCe633j8dmL7v';
        // $secretKey = 'hNNsJiZbXuZE3oqRXBo6SAAM7at7Giit';

        $partnerCode = 'MOMOBKUN20180529';
        $accessKey = 'klm05TvNBzhg7h7j';
        $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';

        $orderInfo = "Thanh toán qua MoMo";
        $amount = $_POST['total_momo'];
        $orderId = time() . "";
        $redirectUrl = "http://bbk.localhost/payment";
        $ipnUrl = "http://bbk.localhost/payment";
        $extraData = "";

        

        $requestId = time() . "";
        $requestType = "payWithATM";
        //$extraData = ($_POST["extraData"] ? $_POST["extraData"] : "");
        //before sign HMAC SHA256 signature
        $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
        $signature = hash_hmac("sha256", $rawHash, $secretKey);
        $data = array('partnerCode' => $partnerCode,
            'partnerName' => "Test",
            "storeId" => "MomoTestStore",
            'requestId' => $requestId,
            'amount' => $amount,
            'orderId' => $orderId,
            'orderInfo' => $orderInfo,
            'redirectUrl' => $redirectUrl,
            'ipnUrl' => $ipnUrl,
            'lang' => 'vi',
            'extraData' => $extraData,
            'requestType' => $requestType,
            'signature' => $signature,
        );
            

        $result = $this->execPostRequest($endpoint, json_encode($data));
        $jsonResult = json_decode($result, true);  // decode json
        Session::put('success_momo',true);
        
        //Just a example, please check more in there
        return redirect()->to($jsonResult['payUrl']);
        
        

    }

    public function index()
    {
        $total = 0;
        $cartitems = Cart::where('user_id',Auth::id())->get();
        foreach($cartitems as $carttotal)
        {
            $total += ($carttotal->products->price - $carttotal->products->discount_value) * $carttotal->prod_qty ;
        }
        $old_cartitems = Cart::where('user_id',Auth::id())->get();
        foreach($old_cartitems as $item)
        {
            if(!Product::where('id', $item->prod_id)->where('quantity','>=',$item->prod_qty)->exists())
            {
                $removeItem = Cart::where('user_id',Auth::id())->where('prod_id', $item->prod_id)->first();
                $removeItem->delete();
            }
        }
        return view('checkout', compact('cartitems'));
    }
    public function placeOrder(Request $request)
    {

        $order = new Order();
        $order->user_id = Auth::id();
        $order->fname = $request->input('fname');
        $order->lname = $request->input('lname');
        $order->company = $request->input('company');
        $order->address1 = $request->input('address1');
        $order->address2 = $request->input('address1');
        $order->city = $request->input('city');
        $order->state = $request->input('state');
        $order->zipcode = $request->input('zipcode');
        $order->email = $request->input('email');
        $order->phone = $request->input('phone');
        $order->note = $request->input('note');
        $order->total_price = $request->input('totalFinal');
        $order->import_price = $request->import_price;
        $order->quantity = $request->quantity;
        $order->tracking_no= 'Tam Mao'.rand(1111,9999);
        $order->save();

        $cartitems = Cart::where('user_id',Auth::id())->get();
        foreach($cartitems as $item)
        {
            OrderItem::create([
                'order_id'  => $order->id,
                'product_id'=> $item->prod_id,
                'quantity'  => $item->prod_qty,
                'price'     => $item->products->price,
            ]);

            // $prod = Product::where('id',$item->prod_id)->first();
            // $prod->quantity = $prod->quantity - $item->prod_qty;
            // $prod->update();

            WaitCart::create([
                'order_id'  => $order->id,
                'product_id'=> $item->prod_id,
                'quantity'  => $item->prod_qty,
                'price'     => $item->products->price,
            ]);

        }

        if(Auth::user()->address1 == NULL)
        {
            $user = User::where('id', Auth::id())->first();
            $user->fname    = $request->input('fname');
            $user->lname    = $request->input('lname');
            $user->company  = $request->input('company');
            $user->address1 = $request->input('address1');
            $user->address2 = $request->input('address1');
            $user->city     = $request->input('city');
            $user->state    = $request->input('state');
            $user->zipcode  = $request->input('zipcode');
            $user->email    = $request->input('email');
            $user->phone    = $request->input('phone');
            $user->note     = $request->input('note');
            $user->update();

        }

        $cartitems = Cart::where('user_id',Auth::id())->get();
        //dd($cartitems);
        if($cartitems){
            foreach($cartitems as $cartitem){
                $cartitem->delete();
            }
        }
        return redirect()->route('order-info', $order->id);
    }
    public function info($id)
    {
        $orders   = Order::where('id', $id)->first();
        $products = Product::orderBy('id','desc')->paginate(10);
        $users    = User::where('id', Auth::id())->first();
        return view('components.order.index', compact('orders','products','users'));
    }
    public function updateTotal(){

    }
    
}
