<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Product;
use App\Category;
use App\Cart;
use Session;
class CartController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $product = Product::find($id);
        $user_id = Auth::user()->id;
        $quantity = 1;

        $cart = Cart::create([
            'user_id'=>$user_id,
            'product_id'=>$product->id,
            'quantity'=>$quantity,
            'product_name'=>$product->name,
            'product_image'=>$product->product_image,
            'price'=>$product->price,
            'discounted_price'=>$product->discounted_price
        ]);
        
        $cart->save();
        Session::flash('status',$product->name.' has been added to your cart');
        return redirect()->route('cart',['id'=>$user_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        if($id == Auth::user()->id){
            $categories = Category::all();
            $cartItems = Cart::where('user_id',$id)->get();
            return view('shop.cart')->with('cartItems',$cartItems)->with('categories',$categories);
        }else{
            // Add some security measures in here
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cart = Cart::find($id);
        $cart->quantity = $request->quantity;
        $cart->price = (int)$request->quantity * (int)$cart->price;
        $cart->save();

        Session::flash('status','Quantity of '.$cart->product_name.' updated successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cart = Cart::find($id);
        $productName = $cart->product_name;
        $cart->delete();
        Session::flash('status',$productName.' has been removed from cart!');
        return redirect()->back();
    }
}
