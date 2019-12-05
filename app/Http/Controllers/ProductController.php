<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('front-end.products.allproducts');
    }
    public function womanProduct(){
        return view('front-end.products.wproducts');
    }
    public function singleProduct(){
        return view('front-end.products.product');
    }
}
