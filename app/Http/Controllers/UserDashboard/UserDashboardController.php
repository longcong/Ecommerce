<?php

namespace App\Http\Controllers\UserDashboard;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    //
    public function index(Request $request)
    {
        $account = Auth::user();
        return view('userdashboard.account.index', compact('account'));
    }
    public function create($id)
    {
        $account = User::find($id);
        return view('userdashboard.account.create',compact('account'));
    }
    public function show($id)
    {
        $account = User::findOrFail($id);
        
        return view('userdashboard.account.show', compact('account'));
    }
    public function UpdateAccount(Request $request, $id){


        $account = User::find($id);
        $account->id = Auth::id();
        $account->username = $request->input('username');
        $account->password = $request->input('password');
        $account->role = $request->input('role');
        $account->email = $request->input('email');
        $account->fname = $request->input('fname');
        $account->lname = $request->input('lname');
        $account->company = $request->input('company');
        $account->address1 = $request->input('address1');
        $account->address2 = $request->input('address2');
        $account->city = $request->input('city');
        $account->state = $request->input('state');
        $account->zipcode = $request->input('zipcode');
        $account->phone = $request->input('phone');
        $account->note = $request->input('note');
        //dd($account);
        $account->save();
        
        return redirect()->route('dashboard',compact($account));
    }

}
