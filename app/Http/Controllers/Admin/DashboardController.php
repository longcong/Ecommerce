<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserFormRequest;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function users()
    {
        $users = User::all();
        return view('admin.users.index',compact('users'));
    }
    public function create($id)
    {
        $acc_admin = User::find($id);
        return view('admin.users.update',compact('acc_admin'));
    }
    public function viewusers($id)
    {
        $users = User::find($id);
        return view('admin.users.view', compact('users'));
    }
    public function updateRole(Request $request)
    {
        $user = User::find($request->user_id);
        $user->role = $request->role;
        $user->save();
    }
    public function Updateadmin(UserFormRequest $request, $id)
    {
        $acc_admin = User::find($id);
        $data = $request->validated();
        $acc_admin->fill($data);
        $acc_admin->save();
        return redirect()->route('admin.users',compact($acc_admin));
    }   
}

