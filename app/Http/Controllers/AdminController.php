<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Login()
    {
        return view('login');
    }
    public function Dashboard()
    {
        return view('adminPage.Dashboard');
    }
}
