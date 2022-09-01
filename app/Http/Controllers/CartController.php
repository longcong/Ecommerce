<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Auth;
use App\Cart;
use App\Coupon;
use App\CouponUser;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use PHPUnit\Framework\Constraint\Count;

class CartController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function addProduct(Request $request)
    {
        if (!Auth::check()) {
            return response()->json(['status'=>"Bạn hãy đăng nhập !"]);
        }

        $product_id = $request->get('product_id');
        $product_qty = $request->get('product_qty');
        $product_size = $request->get('prod_size');
        $product_color = $request->get('prod_color');
        $prod_check = Product::where('id',$product_id)->first();

        if (!$prod_check) {
            return response()->json(['status'=>"Product not found"]);
        }

        $product = Product::where('id',$product_id)->first();
        $stockQuantity = $product->quantity;

        if($carttm = Cart::where('prod_id',$product_id)->where('user_id',Auth::id())->first()){
            $quantitycartitems = $carttm->prod_qty;
            if($quantitycartitems >= $stockQuantity){
                return response()->json(['status'=>"Over quantity in stock"]);
            }
        }

        if(Cart::where('prod_id',$product_id)->where('user_id',Auth::id())->exists())
        {
            if($prod_check = Product::where('id',$product_id)->first())
            {
                if(Cart::where('prod_id',$product_id)->where('user_id',Auth::id())->exists())
                    $cartItem = Cart::where('prod_id',$product_id)->where('user_id',Auth::id())->first();
                    if($product_size != $cartItem->prod_size){
                        $cartItem = new Cart();
                        $cartItem->prod_id = $product_id;
                        $cartItem->prod_qty = $product_qty;
                        $cartItem->user_id = Auth::id();
                        $cartItem->prod_size = $product_size;
                        $cartItem->prod_color = $product_color;
                        $cartItem->save();

                        return response()->json(['status'=>$prod_check->name."Added to Cart 2"]);
                        }

                        if($product_color != $cartItem->prod_color)
                        {
                            $cartItem = new Cart();
                            $cartItem->prod_id = $product_id;
                            $cartItem->prod_qty = $product_qty;
                            $cartItem->user_id = Auth::id();
                            $cartItem->prod_size = $product_size;
                            $cartItem->prod_color = $product_color;
                            $cartItem->save();
                            return response()->json(['status'=>$prod_check->name."Added to Cart 3"]);
                        }
                        else
                        {
                            $cartItem->prod_qty = $cartItem->prod_qty + $product_qty;
                            $cartItem->save();
                            return response()->json(['status'=>$prod_check->name."Quantity Update"]);
                        }
                }
                else {
                    dd('add1');
                    $cartItem = new Cart();
                    $cartItem->prod_id = $product_id;
                    $cartItem->prod_qty = $product_qty;
                    $cartItem->user_id = Auth::id();
                    $cartItem->prod_size = $product_size;
                    $cartItem->prod_color = $product_color; 
                    $cartItem->save();
                    
                    return response()->json(['status'=>$prod_check->name."Added to Cart 1"]);
                }
                  
        }
        else
        {
            $cartItem = new Cart();
            $cartItem->prod_id = $product_id;
            $cartItem->prod_qty = $product_qty;
            $cartItem->user_id = Auth::id();
            $cartItem->prod_size = $product_size;
            $cartItem->prod_color = $product_color; 
            $cartItem->save();
            
            return response()->json(['status'=>$prod_check->name."Added to Cart 0"]);
        }
    }

    public function viewcart(Request $request)
    {
        $cartitems = Cart::where('user_id',Auth::id())->get();
        return view('cart', compact('cartitems'));
    }

    public function updateCart(Request $request){

        if(!Auth::check())
        {
            return response()->json(['status'=>"Need login"]);
            
        }
        $product_id = $request->input('product_id');
        $cartItemQty = $request->input('prod_qty');

        $product = Product::where('id',$product_id)->first();
        $stockQuantity = $product->quantity;
        if($stockQuantity < $cartItemQty )
        {
            return response()->json(['status'=>"Not enough quantity in stock"]);
        }
        if(!Cart::where('prod_id',$product_id)->where('user_id',Auth::id())->first())
        {
            return response()->json(['status'=>"Not found product"]);
        }
        
        $cart = Cart::where('prod_id',$product_id)->where('user_id',Auth::id())->first();
        $cart->prod_qty = $cartItemQty ;
        $cart->update();

        return response()->json(['status'=>"Quatity update"]);
    }

    public function deleteProduct(Request $request){
        if(Auth::check())
        {
            $product_id = $request->input('product_id');
            if(Cart::where('prod_id',$product_id)->where('user_id',Auth::id())->exists())
            {
                $cartItem = Cart::where('prod_id',$product_id)->where('user_id',Auth::id())->first();
                $cartItem -> delete();
                return response()->json(['status'=> "Product Deleted Successfully"]);
            }
        }
        else{
            return response()->json(['status'=>"Login to Continue"]);
        }
    }
    
    public function applyCoupon(Request $request)
    {   
        $CartCount = Cart::where('user_id',Auth::id())->get();
        $Count = $CartCount->count();
        if($Count == 0){
            $request->session()->flash('errors', 'Bạn hãy chọn sản phẩm!');
            return redirect()->back();
        }
        else{
            Session::forget('couponAmount');
            Session::forget('code');
            Session::forget('totalFinal');
            if($request->isMethod('post')){
                $data = $request->all();
                $couponCount = Coupon::where('code',$data['code'])->count();
                if($couponCount == 0){
                    $request->session()->flash('errors', 'Mã giảm giá không hợp lệ!');
                    return redirect()->back();
                }
                
                else{
                    $couponDetail = Coupon::where('code',$data['code'])->first();
                    //dd($couponDetail->quantity);
                    if(!$couponDetail->is_active == 1){
                        $request->session()->flash('errors', 'Mã giảm giá không hoạt động trong thời gian này!');
                        return redirect()->back();
                    }
                    if($couponDetail->quantity == 0){
                        $request->session()->flash('errors', 'Mã giảm giá này đã hết lượt!');
                        return redirect()->back();
                    }
                    $expiry_date = $couponDetail->expiry_date;
                    $current_date = date('Y-m-d');
                    if($current_date > $expiry_date){
                        $request->session()->flash('errors', 'Mã giảm giá đã quá thời gian sử dụng!');
                        return redirect()->back();
                    }
                    $start_date = $couponDetail->start_date;
                    if($current_date < $start_date){
                        $request->session()->flash('errors', 'Mã giảm giá chưa được phát hành!');
                        return redirect()->back();
                    }
                    $type = $couponDetail->type;
                    $type_condition_1 = 'Category_base';
                    //$type_condition_2 = 'Product_base';
                    if($type != $type_condition_1){
                        $request->session()->flash('errors', 'Mã giảm giá không áp dụng cho mặt hàng trên!');
                        return redirect()->back();
                    }
                    // sét số lượng mã giảm giá
                    
                    // $cartquant = new Cart();
                    // $cartquant->quantity_cou = 1;
                        // set mã giảm giá theo số lượng.

                        // $userCart = Cart::where('user_id',Auth::id())->get();
                        // $CountCart = $userCart->count();
                        // if($CountCart < 3){
                        //     $request->session()->flash('errors', 'Coupon code does not apply to the above product total. You need to add the product number if you want to use it!');
                        //     return redirect()->back();
                        // }
                    
                    $userCart = Cart::where('user_id',Auth::id())->get();
                    $total= 0;
                    foreach($userCart as $item){
                        $total += ($item->products->price - $item->products->discount_value) * $item->prod_qty;   
                    }
                
                    if($couponDetail->discount_type == 'Amount'){
                        $couponAmount = $couponDetail->discount_coup;
                    }
                    else{
                        $couponAmount = $total * ($couponDetail->discount_coup/100);
                    }

                    $totalFinal = $total - $couponAmount;
                    Session::put('couponAmount',$couponAmount);
                    Session::put('code',$data['code']);
                    Session::put('totalFinal',$totalFinal);

                    $userCoupons = Coupon::where('code',$data['code'])->get();
                    foreach($userCoupons as $userCoupon)
                    {
                        
                        CouponUser::create([
                            'coupon_id'=> $userCoupon->id,
                            'user_id'=> $item->user_id,
                            'qty_cou' => 1,
                        ]);
            
                        $prod = Coupon::where('id',$userCoupon->id)->first();
                        $prod->quantity = $prod->quantity - 1;
                        $prod->update();
                    }
                    
                    $request->session()->flash('success', 'Áp dụng mã giảm giá thành công!');
                    return redirect()->back();
                }
            }
        }
    }
        
}