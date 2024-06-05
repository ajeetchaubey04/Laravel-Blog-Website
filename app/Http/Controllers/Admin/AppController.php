<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Http\Request;

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
    public function editCategory($id)
    {

    }
    public function storeCategory(Request $request)
    {
        $this->validate($request, [
            'category_name' => 'required', // Change 'category name' to 'category_name'
            'status' => 'required',
        ]);

        // Access input values using the correct keys
        $save = Categorie::create([
            'category_name' => $request->input('category_name'),
            'status' => $request->input('status'),
        ]);

        if ($save) {
            return redirect()->route('categories')->with('success', 'Category Added Successfully');
        }

        return redirect()->back()->with('error', 'Something went wrong');
    }

}
