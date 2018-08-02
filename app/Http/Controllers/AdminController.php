<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Admin;
class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }

    public function index(){
        return view('admin.dashboard');
    }

    public function showUsers(){
        $users = User::all();
        return view('admin.users-list')->with('users',$users);
    }

    public function createAdmin(){
        
    }

    public function showAdmins(){

    }

    public function saveAdmin(){

    }

    public function editAdmin(){

    }

    public function updateAdmin(){

    }
}
