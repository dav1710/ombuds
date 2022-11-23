<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function admin()
    {
        if(Auth::check()){
        return view('admin.admin');
        }
        return redirect("login")->withSuccess('Opps! You do not have access');
    }
}
