<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        
        return view('back-end.profile.profile');
    }

    public function addPost(){

        return view('front-end.post-item.item');
    }
}
