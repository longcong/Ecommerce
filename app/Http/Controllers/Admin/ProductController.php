<?php

namespace App\Http\Controllers\Admin;

use App\Brands;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Product;
use App\Category;
use App\ImportProduct;
use App\Interfaces\ProductInterface;
use App\Tag;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Image;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, ProductInterface $productService)
    {
        $products = $productService->getProducts();
        return view('admin.products.index', compact('products'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, ProductInterface $productService)
    {
        //
        $categories = $productService->getCategories();
        $tags = $productService->getTag();
        $brands = $productService->getBrands();
        return view('admin.products.create', compact('categories','tags','brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $this -> Validate($request,array(
                'title' =>  'required|max:255',
                'discount_unit' => 'required|max:255',
                'discount_value' => 'required|integer',
                'price' => 'required|integer',
                'slug'  => 'required|alpha_dash|min:5|max:255|unique:products,slug',
                'category_id' => 'required|integer',
                'brand_id'  => 'required|integer',
                'is_popular' => 'required|integer',
                'product_color'  => 'max:255',
                'product_size'  => 'required|max:255',
                'quantity' => 'required|integer',
                'note'  =>  'required',
                'featured_image' => 'image',
                'meta_image' => 'image'
            ));

            $product = new Product;

            $product->title = $request->title;
            $product->slug = $request->slug;
            $product->quantity = $request->quantity;
            $product->category_id = $request->category_id;
            $product->brand_id = $request->brand_id;
            $product->price = $request->price;
            $product->discount_unit = $request->discount_unit;
            $product->product_size = $request->product_size;
            $product->product_color = $request->product_color;
            $product->is_popular = $request->is_popular;
            $product->discount_value = $request->discount_value;
            $product->note = $request->note;

            if($request->hasFile('featured_image')){
                $image = $request->file('featured_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/' . $filename);
                Image::make($image)->resize(600, 600)->save($location);
                $product->image = $filename;
            }
            if($request->hasFile('meta_image')){
                $image = $request->file('meta_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('meta_images/' . $filename);
                Image::make($image)->resize(300, 300)->save($location);
                $product->meta_image = $filename;
            }
            $product -> save();
            $product -> tags()->sync($request->tags, false);

            $import = new ImportProduct;
            $import->prod_id = $product->id;
            $import->title = $product->title;
            $import->oldPrice = $product->price;
            $import->importPrice = $product->price;
            $import->quantity = $product->quantity;
            $import->save();

            DB::commit();
            $request->session()->flash('success', 'The product was successfully save!');

            return redirect() -> route('products.index');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Error Create',['error' => $e->getMessage()]);
            $request->session()->flash('error', 'The product update error save!');
            return redirect()->back();
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.show', compact(['product']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Product::find($id);
        $categories = Category::all();
        $cats = array();
        foreach  ($categories as $category){
            $cats[$category->id] = $category->name;
        }

        $tags = Tag::all();
        $tags2 = array();
        foreach ($tags as $tag){
           $tags2[$tag->id] = $tag->name;
        }

        $brands = Brands::all();
        $bra = array();
        foreach  ($brands as $brand){
            $bra[$brand->id] = $brand->name;
        }
        
        
        return view('admin.products.edit')->withPost($products)->withCategories($cats)->withTags($tags2)->withBrands($bra);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();

            $this -> Validate($request, array(
                'title' =>  'required|max:255',
                'discount_unit' => 'required|max:255',
                'discount_value' => 'required|integer',
                'price' => 'required|integer',
                'slug'  =>  'required|alpha_dash|min:5|max:255|',
                'product_color'  => 'max:255',
                'product_size'  => 'required|max:255',
                'category_id' => 'required|integer',
                'brand_id'  => 'required|integer',
                'note'  =>  'required',
                'featured_image' => 'image',
                'meta_image' => 'image',
                ));
            $product = Product::findOrfail($id);
            
            $product->title = $request->input('title');
            $product->price = $request->input('price');
            $product->quantity = $request ->input('quantity');
            $product->slug = $request->input('slug');
            $product->discount_unit = $request->input('discount_unit');
            $product->category_id = $request->input('category_id');
            $product->brand_id = $request->input('brand_id');
            $product->product_color = $request->input('product_color');
            $product->product_size = $request->input('product_size');
            $product->is_popular = $request->input('is_popular');
            $product->discount_value = $request->input('discount_value');
            $product->note = $request->input('note');
    
            if($request->hasFile('featured_image')) {
                // Add the new photo
                $image = $request->file('featured_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/' . $filename);
                Image::make($image)->resize(600, 600)->save($location);
    
                $oldFilename = $product->image;
                // Update the database
                $product->image = $filename;
                // Delete the old photo
                Storage::delete($oldFilename);
    
            }
            if($request->hasFile('meta_image')) {
                // Add the new photo
                $image = $request->file('meta_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('meta_images/' . $filename);
                Image::make($image)->resize(600, 600)->save($location);
    
                $oldFilename = $product->meta_image;
                // Update the database
                $product->meta_image = $filename;
                // Delete the old photo
                Storage::delete($oldFilename);
            }
            $product -> save();
            if(isset($request->tags)) {
                $product->tags()->sync($request->tags);
            }else{
                $product->tags()->sync(array());
            }
    
            $product->tags()->sync($request->tags);
    
            $import                = new ImportProduct;
            $import->title         = $product->title;
            $import->oldPrice      = $product->price;
            $import->importPrice   = $product->price;
            $import->save();
            DB::commit();
    
            $request->session()->flash('success', 'The product update successfully save!');
    
            return redirect()->route('products.index');

            
        } catch (exception $e) {
            DB::rollBack();
            Log::error('Error Create',['error' => $e->getMessage()]);
            $request->session()->flash('error', 'The product update error save!');
            return redirect()->back();
        }   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

        //
    public function destroy(Request $request ,$id)
    {
        $product = Product::find($id);
        $product -> tags()->detach();
        Storage::delete($product->image);
        $product -> delete();

        $request->session()->flash('success', 'The product was successfully delete!');

        return redirect()->route('products.index');
    }
}
