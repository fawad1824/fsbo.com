<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $title = "Dashboard";
        $title1 = "Home";
        return view('home', compact('title', 'title1'));
    }
    public function propertyRent()
    {
    }
    public function users()
    {
        $title = "Users";
        $title1 = "Home";
        $user = User::where('role_id', '1')->get();
        return view('Admin.Users.users', compact('title', 'title1', 'user'));
    }
    public function usersedit($id)
    {
    }
    public function deleteedit($id)
    {
    }
    public function addUser(){

    }
}
