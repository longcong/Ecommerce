<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function users()
    {
        $users = User::all();
        return view('admin.users.index',compact('users'));
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
        return response()->json(['status'=>'Access rights have changed successfully.']);
    }
}
