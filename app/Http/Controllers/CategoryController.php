<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(){
        $category = Category::findOrFail(1);
        
        return view('category.create',get_defined_vars());
    }
}
