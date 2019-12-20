<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryControlle extends Controller
{
    public function index(){
        return view('back-end.category.add-category');
    }

    public function showCategory(){
        return view('back-end.category.show-category');
    }
}
