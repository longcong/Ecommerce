<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Product;
use App\Category;
use App\Tag;
use Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id','desc')->paginate(5);

        return view('admin.products.index')-> withProducts($products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$categories = Category::all();
        //$tags = Tag::all();
        return view('admin.products.create '); //->withCategories($categories)->withTags($tags)
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> Validate($request,array(
            'title' =>  'required|max:255',
            'discount_unit' => 'required|max:255',
            'discount_value' => 'required|integer',
            'price' => 'required|integer',
            //'slug'  =>  'required|alpha_dash|min:5|max:255|unique:posts,slug',
            //'category_id' => 'required|integer',
            //'status_id'  => 'required|integer',
            'note'  =>  'required',
            'featured_image' => 'required|image'
    ));

    $post = new Product;

    $post -> title = $request->title;
    //$post -> slug = $request ->slug;
    //$post -> category_id = $request->category_id;
    $post -> price = $request->price;
    $post -> discount_unit = $request->discount_unit;
    $post -> discount_value = $request->discount_value;
    $post -> note = $request->note;

    if($request->hasFile('featured_image')){
        $image = $request->file('featured_image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('images/' . $filename);
        Image::make($image)->resize(800, 400)->save($location);

        $post->image = $filename;
    }

    $post -> save();
    //$post -> tags()->sync($request->tags, false);

    $request->session()->flash('success', 'The blog post was successfully save!');

    return redirect() -> route('products.show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Product::find($id);
        return view('products.show') -> withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        $post = Product::find($id);
        if($request->input('slug') == $post->slug ){
            $this->validate($request, array(
                'title' => 'required|max:255',
                'category_id' => 'required|integer',
                'body' => 'required'
            )); 
        }else{

        $this->validate($request,array(
            'title'=> 'required|max:255',
            'slug' => 'required|alpha_dash|min:5|max:255|unique:posts,slug,$id',
            'category_id' => 'required|integer',
            'body' => 'required',
            'featured_image' => 'image'
        ));
        }
        //Lưu vào database
        $post = Product::find($id);

        $post->title = $request->input('title');
        $post->slug =$request ->input('slug');
        $post->category_id = $request->input('category_id');
        $post->body =$request->input('body');

        if($request->hasFile('featured_image')){
            //add new photo
            $image = $request->file('featured_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(800, 400)->save($location);
            $oldFilename = $post->image;

            //update
            $post->image = $filename;
            //delete
            Storage::delete($oldFilename);
        }

        $post->save();

        if(isset($request->tags)){
            $post->tags()->sync($request->tags, true);
        }else{
            $post->tags()->sync(array());
        }
        //Cài đặt lưu nhanh
        $request->session()->flash('success', 'The blog post was successfully save!');
        
        //lưu nhanh đến post show
        return redirect()->route('products.show' , $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request ,$id)
    {
        $post = PRODUCT::find($id);
        $post -> tags()->detach();
        Storage::delete($post->image);

        $post -> delete();

        $request->session()->flash('success', 'The blog post was successfully delete!');

        return redirect()->route('products.index');
    }
}
