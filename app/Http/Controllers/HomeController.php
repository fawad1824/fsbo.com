<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        $title = "Admins";
        $title1 = "Home";
        $user = User::where('role_id', '1')->get();
        return view('Admin.Users.users', compact('title', 'title1', 'user'));
    }

    public function usersagent()
    {
        $title = "Agents";
        $title1 = "Home";
        $user = User::where('role_id', '2')->get();
        return view('Admin.Users.agent', compact('title', 'title1', 'user'));
    }
    public function usersuser()
    {
        $title = "Customers";
        $title1 = "Home";
        $user = User::where('role_id', '4')->get();
        return view('Admin.Users.customers', compact('title', 'title1', 'user'));
    }
    public function usersdealer()
    {
        $title = "Dealers";
        $title1 = "Home";
        $user = User::where('role_id', '1')->get();
        return view('Admin.Users.dealer', compact('title', 'title1', 'user'));
    }

//     usersagent
// usersuser
// usersdealer
    public function usersedit($id)
    {
        $user = User::where('id', $id)->first();
        $title = "Users Edit";
        $title1 = "Users";
        return view('Admin.Users.editusers', compact('title', 'title1', 'user'));
    }
    public function deleteedit($id)
    {
    }
    public function addUser()
    {
        $title = "Users Create";
        $title1 = "Users";
        return view('Admin.Users.createusers', compact('title', 'title1'));
    }
    public function addCreateUser(Request $data)
    {
        // $data = $data->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'password' => 'required|string|min:8',
        //     'role_id' => 'required',
        //     'phone' => 'required|number|max:11|unique:users',
        //     'address' => 'required',
        // ]);
        if ($data['id']) {
            $user = User::where('id', $data['id'])->first();
            $user->name = $data['name'];
            $user->email = $data['email'];
            if (isset($data['password'])) {
                $user->password = Hash::make($data['password']);
            }
            $user->role_id = $data['role_id'];
            $user->status = '1';
            $user->phone = $data['phone'];
            $user->address = $data['address'];
            $user->save();
            return redirect()->back()->with('success', 'User Updated successfully.');
        }
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => $data['role_id'],
            'status' => '1',
            'phone' => $data['phone'],
            'address' => $data['address'],
        ]);
        return redirect()->back()->with('success', 'User Added successfully.');
    }
}
