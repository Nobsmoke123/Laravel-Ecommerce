<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(){
        $products = Product::all()->random(30);
        $categories = Category::all();
        return view('shop.index')->with('products',$products)->with('categories',$categories);
    }

    public function wishlist(){
        $categories = Category::all();
        return view('shop.wishlist')->with('categories',$categories);
    }

    public function delivery(){
        $categories = Category::all();
        return view('shop.delivery')->with('categories',$categories);
    }

    public function payment(){
        $categories = Category::all();
        return view('shop.payment')->with('categories',$categories);
    }

    public function receipt(){
        $categories = Category::all();
        return view('shop.receipt')->with('categories',$categories);
    }
}
