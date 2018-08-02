<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Category;
use App\Product;
use Session;

class IndexController extends Controller
{
    public function __construct(){
        // $this->middleware('guest');
    }

    public function index(){
        $products = Product::all()->random(30);
        $categories = Category::all();
        return view('shop.index')->with('products',$products)->with('categories',$categories);
    }

    public function show_all(){
        $products = Product::paginate(30);
        $categories = Category::all();
        return view('shop.index')->with('products',$products)->with('categories',$categories);
    }


    public function show_json($id){
        $product = Product::find($id);
        return response()->json([$product,$product->category->name]);
    }

    public function contact(){
        $categories = Category::all();
        return view('shop.contact')->with('categories',$categories);
    }

    public function about(){
        $categories = Category::all();
        return view('shop.about')->with('categories',$categories);
    }

    public function products_grid(){
        $categories = Category::all();
        return view('shop.product-grid')->with('categories',$categories);
    }

    public function products_list(){
        $categories = Category::all();
        return view('shop.product-list')->with('categories',$categories);
    }

    public function product($id){
        $product = Product::find($id);
        $categories = Category::all();
        $similar = Product::where('category_id','!=',$product->category_id)->take(6)->get();
        $category = $product->category->name;
        $title = $product->name;
        return view('shop.product')->with('product',$product)
            ->with('category',$category)
            ->with('title',$title)
            ->with('similar',$similar)->with('categories',$categories);
    }

    public function category(){
        $categories = Category::all();
        return view('shop.category')->with('categories',$categories);
    }

    public function wishlist(){
        $categories = Category::all();
        return view('shop.wishlist')->with('categories',$categories);
    }
    
    public function cart(){
        $categories = Category::all();
        return view('shop.cart')->with('categories',$categories);
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

    public function listCategories(){
        $category_items = Category::paginate(9);
        $categories = Category::all();
        return view('shop.category')->with('categories',$categories)->with('category_items',$category_items);
    }

    public function showCategoryProducts($id){
        $products = Category::find($id)->products;
        $category = Category::find($id);
        $categories = Category::all();
        $name = $category->name;
        return view('shop.product-grid')->with('products',$products)->with('name',$name)->with('categories',$categories);
    }
}
