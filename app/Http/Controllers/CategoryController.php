<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function show_category()
    {
        return view("categories.create");
    }

    public function store_category (Request $request)
    {
        $cat = new Category();

        $cat->name = $request->name_category_input;
        $cat->slug = Str::slug($request->name_category_input);

        $cat->save();
    }
}
