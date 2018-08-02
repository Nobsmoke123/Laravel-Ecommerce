<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class AdminLoginController extends Controller
{
    public function __construct(){
        /* For only those who are not logged in as admins */
        $this->middleware('guest:admin');
    }
    
    public function showLoginForm(){
        return view('auth.admin_login');
    }

    public function login(Request $request){
        // Validate the form data
        $this->validate($request, [
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);

        // Attempt to log the user in 
        $credentials = ['email'=> $request->email, 'password'=>$request->password];
        if (Auth::guard('admin')->attempt($credentials,$request->remember)) {
            // if successful then redirect to their intended location
            /* Sends them to their intended page visit if they had one and to the admin dashboard if they were just on the login page */
            return redirect()->intended(route('admin.dashboard'));
        }

        $errors = [$this->username() => trans('auth.failed')];
        // if unsuccessful then redirect back to the login with the form data except the password
        return redirect()->back()->withInput($request->only('email','remember'))->withErrors($errors);
    }

    public function username()
    {
        return 'email';
    }
}
