<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Session;
class CategoryController extends Controller
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
        $categories = Category::all();
        return view('admin.category-list')->with('categories',$categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|unique:categories',
            'icon'=>'required',
            'description'=>'required|max:255',
            'image'=>'required|image'
        ]);
        
        $image = $request->image;
        $image_new_name = time().$image->getClientOriginalName();
        $image->move('uploads/categories',$image_new_name);

        $category = Category::create([
            'name'=> $request->name,
            'slug'=> str_slug($request->name),
            'image'=> 'uploads/categories'.$image_new_name,
            'icon' => $request->icon,
            'description'=>$request->description
        ]);

        // $category->save();
        // Session::flash('status','Category Added Successfully');

        // return redirect()->route('admin:category-list');

        dd($request->all());
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
        $category = Category::find($id);
        return view('admin.category-edit')->with('category',$category);
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
        // dd($request->all());
        $category = Category::find($id);

        $category->name = $request->name;
        $category->save();

        Session::flash('status','Category update was successful!');
        return redirect()->route('admin:category-list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();

        Session::flash('status','Category has been deleted successfully!');
        return redirect()->route('admin:category-list');
    }
}
