<?php

namespace App\Http\Controllers\Admin;

use App\Brands;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;

class BrandsController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brands::orderBy('id', 'asc')->paginate(5);
        return view('admin.brands.index',compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this-> Validate($request, array(
            'name' => 'required|max:255',
            'meta_title' => 'required|max:255',
            'meta_description' => 'required|max:255',
            'slug'  => 'required|alpha_dash|min:2|max:255|unique:brands,slug',
            'image' => 'image'
        ));
        $brand = new Brands;

        $brand->name = $request->name;
        $brand->slug = $request->slug;
        $brand->meta_title = $request->meta_title;
        $brand->meta_description = $request->meta_description;

        if($request->hasFile('brand_image')){
            $image = $request->file('brand_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('brands_img' . $filename);
            Image::make($image)->resize(500, 700)->save($location);

            $brand->image = $filename;
        }


        $brand->save();
        $request->session()->flash('success', 'Nhãn hàng mới được khởi tạo!');
        return redirect() -> route('brands.index' );
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brands = Brands::find($id);
        return view('admin.brands.edit',compact('brands'));
        
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
        //
        $brands = Brands::find($id);

        $this->validate($request, array(
            'name' => 'required|max:255',
            'meta_title' => 'required|max:255',
            'meta_description' => 'required|max:255',
            'slug'  => 'required|alpha_dash|min:2|max:255|',
            'image' => 'image'
        ));
        
        $brand = Brands::find($id);

        $brand->name = $request->input('name');
        $brand->slug = $request->input('slug');
        $brand->meta_title = $request->input('meta_title');
        $brand->meta_description = $request->input('meta_description');

        if($request->hasFile('brand_image')){
            $image = $request->file('brand_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('brands_img' . $filename);
            Image::make($image)->resize(500, 700)->save($location);
            $brand->image = $filename;
            $oldFilename = $brand->image;
            // Update the database
            $brand->image = $filename;
            // Delete the old photo
            Storage::delete($oldFilename);
        }
        //save
        $brand->save();
        $request->session()->flash('success', 'Nhãn hàng được cập nhật thành công!');
        return redirect()->route('brands.index', $brands->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $brands = Brands::find($id);
        $brands -> delete(); 
        $request->session()->flash('success', 'Nhãn hàng được xóa thành công.');

        return redirect()->route('brands.index');
    }
}
