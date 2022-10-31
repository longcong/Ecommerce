<?php

namespace App\Http\Controllers\Admin;

use App\Brands;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Product;
use App\Category;
use App\Interfaces\ProductInterface;
use App\Tag;
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
        //
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
        //
        $post = new Product;

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

        $post = new Product;

        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->quantity = $request->quantity;
        $post->category_id = $request->category_id;
        $post->brand_id = $request->brand_id;
        $post->price = $request->price;
        $post->discount_unit = $request->discount_unit;
        $post->product_size = $request->product_size;
        $post->product_color = $request->product_color;
        $post->is_popular = $request->is_popular;
        $post->discount_value = $request->discount_value;
        $post->note = $request->note;

        if($request->hasFile('featured_image')){
            $image = $request->file('featured_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(600, 600)->save($location);

            $post->image = $filename;
        }
        if($request->hasFile('meta_image')){
            $image = $request->file('meta_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('meta_images/' . $filename);
            Image::make($image)->resize(300, 300)->save($location);

            $post->meta_image = $filename;
        }


        $post -> save();
        $post -> tags()->sync($request->tags, false);

        $request->session()->flash('success', 'The product was successfully save!');

        return redirect() -> route('products.index');
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
        $posts = Product::find($id);
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
        
        
        return view('admin.products.edit')->withPost($posts)->withCategories($cats)->withTags($tags2)->withBrands($bra);
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
        $post = Product::find($id);

        $post->title = $request->input('title');
        $post->price = $request->input('price');
        $post->quantity = $request ->input('quantity');
        $post->slug = $request->input('slug');
        $post->discount_unit = $request->input('discount_unit');
        $post->category_id = $request->input('category_id');
        $post->brand_id = $request->input('brand_id');
        $post->product_color = $request->input('product_color');
        $post->product_size = $request->input('product_size');
        $post->is_popular = $request->input('is_popular');
        $post->discount_value = $request->input('discount_value');
        $post->note = $request->input('note');

        if($request->hasFile('featured_image')) {
            // Add the new photo
            $image = $request->file('featured_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(600, 600)->save($location);

            $oldFilename = $post->image;
            // Update the database
            $post->image = $filename;
            // Delete the old photo
            Storage::delete($oldFilename);

        }
        if($request->hasFile('meta_image')) {
            // Add the new photo
            $image = $request->file('meta_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('meta_images/' . $filename);
            Image::make($image)->resize(600, 600)->save($location);

            $oldFilename = $post->meta_image;
            // Update the database
            $post->meta_image = $filename;
            // Delete the old photo
            Storage::delete($oldFilename);
        }
        $post -> save();
        if(isset($request->tags)) {
            $post->tags()->sync($request->tags);
        }else{
            $post->tags()->sync(array());
        }

        $post->tags()->sync($request->tags);

        $request->session()->flash('success', 'Sản phẩm được cập nhật thành công abcxyz!');

        return redirect()->route('products.index');
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
        $post = Product::find($id);
        $post -> tags()->detach();
        Storage::delete($post->image);
        $post -> delete();

        $request->session()->flash('success', 'The product was successfully delete!');

        return redirect()->route('products.index');
    }
}
