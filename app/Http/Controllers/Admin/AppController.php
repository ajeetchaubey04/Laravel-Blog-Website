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
        return view('admin.categories.index');
    }
    public function addCategory()
    {
        return view('admin.categories.add');
    }
}
