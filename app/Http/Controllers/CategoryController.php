<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $category = Category::all();

        return view('dashboard.category.index', ['data' => $category]);
    }

    public function store(Request $request)

    {
        $this->validate($request, [
            'name' => 'required',
            
        ]);

        $fileName = "";
        if ($request->file('icon')){
            $file = $request->file('icon');

            $fileName = "image/" . date('ymdHi.'). $file->getClientOriginalExtension();
            $file->move(public_path('image'), $fileName);
        }

        $create = Category::create([
           'name' => $request->name,
           'icon' => $fileName 
        ]);

        if ($create) {
            return redirect()->back()->with('success', 'data berhasil ditambahkan');
        } else {
            return redirect()->back()->with('eror', 'data gagal disimpan');
        }
        }

    }
