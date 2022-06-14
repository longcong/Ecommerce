<?php

namespace App\Http\Controllers\Admin;

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
        return view('admin.products.create', compact('categories','tags'));
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
            'is_popular' => 'required|integer',
            //'status_id'  => 'required|integer',
            'quantity' => 'required|integer',
            'note'  =>  'required',
            'featured_image' => 'image'
        ));

        $post = new Product;

        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->quantity = $request->quantity;
        $post->category_id = $request->category_id;
        $post->price = $request->price;
        $post->discount_unit = $request->discount_unit;
        $post->category_id = $request->category_id;
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

        $post -> save();
        $post -> tags()->sync($request->tags, false);

        $request->session()->flash('success', 'The product post was successfully save!');

        return redirect() -> route('products.show', $post -> id);
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
        // Xem
        return view('admin.products.edit')->withPost($posts)->withCategories($cats)->withTags($tags2);
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

        // $this -> Validate($request, array(
        //     'title' =>  'required|max:255',
        //     'discount_unit' => 'required|max:255',
        //     'discount_value' => 'required|integer',
        //     'price' => 'required|integer',
        //     //'slug'  =>  'required|alpha_dash|min:5|max:255|unique:posts,slug',
        //     'category_id' => 'required|integer',
        //     //'status_id'  => 'required|integer',
        //     'note'  =>  'required',
        //     'featured_image' => 'image'
        //     ));
        $post = Product::find($id);

        $post->title = $request->input('title');
        $post->price = $request->input('price');
        $post->quantity = $request ->input('quantity');
        $post->slug = $request->input('slug');
        $post->discount_unit = $request->input('discount_unit');
        $post->category_id = $request->input('category_id');
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
        $post -> save();
        if(isset($request->tags)) {
            $post->tags()->sync($request->tags);
        }else{
            $post->tags()->sync(array());
        }

        $post->tags()->sync($request->tags);

        $request->session()->flash('success', 'The product post was successfully save!');

        return redirect()->route('products.show', $post->id);
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
        $post = Product ::find($id);
        $post -> tags()->detach();
        Storage::delete($post->image);

        $post -> delete();

        $request->session()->flash('success', 'The product was successfully delete!');

        return redirect()->route('products.index');
    }
}
