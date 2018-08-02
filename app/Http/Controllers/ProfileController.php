<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use App\Category;
class ProfileController extends Controller
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
        // return view('profile');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /* Verify that the user id passed is aligned with the actual id for the authenticated user */
        if($id == Auth::user()->id){
            $categories = Category::all();
            $details = User::where('id',$id)->take(1)->get();
            return view('shop.profile')->with('details',$details)->with('categories',$categories);
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
        //
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
        $this->validate($request,[
            'old_password'=>'required',
            'new_password'=>'required|min:8|max:16|same:confirm_password',
            'confirm_password'=>'required'
        ]);

        if($id == Auth::user()->id){
            $user = User::find($id);
            if(Hash::check($request->old_password,$user->password)){
                $user->password = Hash::make($request->new_password);
                $user->save();
                Session::flash('status','Password Updated Successfully!');
            }else{
                Session::flash('error','Incorrect Passwords');
            }
            
        }else{

        }
        
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
        //
    }
}
