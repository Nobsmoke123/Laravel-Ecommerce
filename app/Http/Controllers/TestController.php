<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    
    public function index(){
        return view('shop.index');
    }

    public function register(){
        return view('shop.register');
    }

    public function contact(){
        return view('shop.contact');
    }

    public function about(){
        return view('shop.about');
    }


    public function products_list(){
        return view('shop.product-list');
    }

    public function wishlist(){
        return view('shop.wishlist');
    }

}
