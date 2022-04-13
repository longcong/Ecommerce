<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;


class AdminLoginController extends Controller
{
    //
    public function __construct(){
        $this->middleware('guest:admin',['except' => ['logout']]);
    }
    public function showLoginForm(){
        return view('auth.admin-login');
    }
    public function login(Request $request){
        //return true;
        //validate the form data
        $this->validate($request, [
            'username' => 'required|username',
            'password' => 'required|min:6'
        ]);
        //attempt to log the user in
        if (Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password], $request->remember)) {
            //if successful, them redirect to their rintended location
            return redirect()->intended(route('admin.dashboard'));
        }
        //if unsuccessfil, them redirect back to the login with the form data
        return redirect()->back()->withInput($request->only('username','remember'));
    }
    public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect('/');
    }
}
