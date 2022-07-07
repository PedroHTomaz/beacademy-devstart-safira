<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('users.admin-login');
    }
    public function dashboard()
    {
        return view('dashboard.product');
    }
    public function dashboardUsers()
    {
        return view('dashboard.users');
    }
}