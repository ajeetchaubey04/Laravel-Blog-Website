<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AppController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function categories()
    {
        return "hello from categores";
    }
    public function addCategory()
    {
        return view('admin.categories.add');
    }
}
