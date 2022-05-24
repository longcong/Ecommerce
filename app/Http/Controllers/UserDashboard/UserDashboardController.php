<?php

namespace App\Http\Controllers\UserDashboard;

use App\Http\Controllers\Controller;
use App\UserDashboard;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    //
    public function index()
    {
        //
        return view('userdashboard.userdashboard.index');
    }
}
