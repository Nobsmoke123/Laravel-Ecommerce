<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Session;
class ProductController extends Controller
{

    public function __construct(){
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function index()
    {
        $products = Product::all();
        return view('admin.product-list')->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('id')->get();
        return view('admin.product-create')->with('categories',$categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* Run the validations  */

        $this->validate($request,[
            'name'=>'required|max:255',
            'category_id'=>'required',
            'quantity'=>'required|numeric',
            'details'=>'required|max:255',
            'description'=>'required|max:255',
            'price'=>'required|numeric',
            'discounted_price'=>'required|numeric',
            'image'=>'required | image',
            'sub_image_1'=>'required | image',
            'sub_image_2'=>'required | image',
            'sub_image_3'=>'required | image'
        ]);

        /* Save the uploaded files */
        $image = $request->image;
        $image_new_name = time().$image->getClientOriginalName();
        $image->move('uploads/products',$image_new_name);

        $image = $request->sub_image_1;
        $thumbnail1 = time().$image->getClientOriginalName();
        $image->move('uploads/products',$thumbnail1);

        $image = $request->sub_image_2;
        $thumbnail2 = time().$image->getClientOriginalName();
        $image->move('uploads/products',$thumbnail2);

        $image = $request->sub_image_3;
        $thumbnail3 = time().$image->getClientOriginalName();
        $image->move('uploads/products',$thumbnail3);

        $discount = ceil($request->price - (($request->discounted_price/100) * $request->price));

        $product = Product::create([
            'name'=>$request->name,
            'category_id'=>$request->category_id,
            'slug'=>str_slug($request->name),
            'quantity'=>$request->quantity,
            'details'=>$request->details,
            'description'=>$request->description,
            'price'=>$request->price,
            'discounted_price'=>$discount,
            'product_image'=>'uploads/products/'.$image_new_name,
            'sub_image_1'=>'uploads/products/'.$thumbnail1,
            'sub_image_2'=>'uploads/products/'.$thumbnail2,
            'sub_image_3'=>'uploads/products/'.$thumbnail3
        ]);

        $product->save();

        Session::flash('status','Product Added Successfully');

        return redirect()->route('admin:product-list');
        // dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        return view('admin.product-edit')->with('product',$product)->with('categories',$categories);
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
        $product = Product::find($id);

        $this->validate($request,[
            'name'=>'required|max:255',
            'category_id'=>'required',
            'quantity'=>'required|numeric',
            'details'=>'required|max:255',
            'description'=>'required|max:255',
            'price'=>'required|numeric',
            'discounted_price'=>'required|numeric',
        ]);

        $discount = ceil($request->price - (($request->discounted_price/100) * $request->price));

        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->quantity = $request->quantity;
        $product->details = $request->details;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->discounted_price = $discount;

        if( !empty($request->image)){
            $image = $request->image;
            $image_new_name = time().$image->getClientOriginalName();
            $image->move('uploads/products',$image_new_name);
            $product->product_image = 'uploads/products/'.$image_new_name;
        }

        if( !empty($request->sub_image_1)){
            $image = $request->sub_image_1;
            $thumbnail1 = time().$image->getClientOriginalName();
            $image->move('uploads/products',$thumbnail1);
            $product->sub_image_1 =  'uploads/products/'.$thumbnail1;
        }

        if( !empty($request->sub_image_2)){
            $image = $request->sub_image_2;
            $thumbnail2 = time().$image->getClientOriginalName();
            $image->move('uploads/products',$thumbnail2); 
            $product->sub_image_2 = 'uploads/products/'.$thumbnail2;           
        }

        if( !empty($request->sub_image_3)){
            $image = $request->sub_image_3;
            $thumbnail3 = time().$image->getClientOriginalName();
            $image->move('uploads/products',$thumbnail3);
            $product->sub_image_3 = 'uploads/products/'.$thumbnail3;
        }
        
        $product->save();
        
        Session::flash('status','Product Updated Successfully!');

        return redirect()->route('admin:product-list');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        $product->delete();

        Session::flash('status','Product Deleted Successfully!');

        return redirect()->route('admin:product-list');
    }
}
