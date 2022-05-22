<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;


class CategoryController extends Controller
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
        //
        $categories = Category::orderBy('id', 'asc')->paginate(6);
        return view('admin.categories.index')->withCategories($categories);
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
        // save a new category and then redirect back to index
        $this-> Validate($request, array(
            'name' => 'required|max:255',
            'description' => 'required|max:255'
        ));
        $category = new Category;

        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();

        $request->session()->flash('success', 'New Category has been created!');

        return redirect() -> route('categories.index' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // $categories = Category::find($id);
        // return view('admin.categories.show')->withCategories($categories);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $categories = Category::find($id);
        return view('admin.categories.edit')->withCategories($categories);
        
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
        $categories = Category::find($id);

        $this->validate($request, array(
            'name' => 'required|max:255',
            'description' => 'required|max:255'
        ));
        
        $categories = Category::find($id);

        $categories->name = $request->input('name');
        $categories->description = $request->input('description');
        //save
        $categories->save();

        $request->session()->flash('success', 'Successfully saved your new category!');

        return redirect()->route('categories.index', $categories->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //
        $categories = Category::find($id);
        
        $categories -> delete(); 

        $request->session()->flash('success', 'This category was successfully saved.');

        return redirect()->route('categories.index');
    }
}
