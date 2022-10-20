<?php

namespace App\Http\Controllers\Admin;

use App\Fabric;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FabricController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $fabrics = Fabric::orderBy('id', 'asc')->paginate(4);
        return view('admin.fabric.index',compact('fabrics'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // save a new category and then redirect back to index
        $this-> Validate($request, array(
            'name' => 'required|max:255',
        ));

        $fabric         = new Fabric();
        $fabric->fabric = $request->name;
        
        $fabric->save();

        $request->session()->flash('success', 'Chất liệu mới được khởi tạo!');

        return redirect() -> route('fabric.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fabric = Fabric::find($id);
        return view('admin.fabric.edit',compact('fabric'));
        
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
        $fabric = fabric::find($id);

        $this->validate($request, array(
            'fabric' => 'required|max:191',
        ));
        
        $fabric       = Fabric::find($id);
        $fabric->fabric = $request->fabric;
       
        $fabric->save();

        $request->session()->flash('success', 'Chất liệu được cập nhật thành công!');

        return redirect()->route('fabric.index', $fabric->id);
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
        $fabric = Fabric::find($id);
        
        $fabric -> delete(); 

        $request->session()->flash('success', 'Danh mục được xóa thành công!');

        return redirect()->route('fabric.index');
    }
}
