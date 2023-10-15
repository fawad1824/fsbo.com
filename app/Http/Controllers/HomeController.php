<?php

namespace App\Http\Controllers;

use App\Models\Admin\properties;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

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
        $propertyISell = properties::where('type', 'sell')->count();
        $propertyIRent = properties::where('type', 'rent')->count();

        return view('home', compact(
            'title',
            'title1',
            'propertyISell',
            'propertyIRent'
        ));
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
        $user = User::where('role_id', '3')->get();
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
    public function usersdelete($id)
    {
        User::find($id)->delete();
        return redirect()->back()->with('success', 'User Deleted successfully.');
    }
    public function addUser()
    {
        $title = "Users Create";
        $title1 = "Users";

        return view('Admin.Users.createusers', compact('title', 'title1'));
    }
    public function addCreateUser(Request $data)
    {
        if ($data['id']) {
            $user = User::where('id', $data['id'])->first();
            $user->name = $data['name'];
            $user->email = $data['email'];
            if (isset($data['password'])) {
                $user->password = Hash::make($data['password']);
            }
            $user->role_id = $data['role_id'];
            $user->status = $data->status;
            $user->phone = $data['phone'];
            $user->address = $data['address'];


            if ($data->hasFile('image')) {
                $image = $data->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images'), $imageName);
                $user->avatar = $imageName;
            }

            $user->save();
            if ($data->status == "1") {
                $this->sendEmail($user, "Hi " . $user->name . " ! "  . "Deactivated Your Account", "FBSO Updated Your Account");
            } else if ($data->status) {
                $this->sendEmail($user, "Hi " . $user->name . " ! "  . "Activated Your Account", "FBSO Updated Your Account");
            }
            return redirect()->back()->with('success', 'User Updated successfully.');
        }

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => $data['role_id'],
            'status' => $data->status,
            'phone' => $data['phone'],
            'address' => $data['address'],
        ]);
        if ($data->status == "1") {
            $this->sendEmail($user, "Hi " . $user->name . " ! "  . "Your Account Has been created and you account status is deactivated", "FBSO Team");
        } else if ($data->status) {
            $this->sendEmail($user, "Hi " . $user->name . " ! "  . "Your Account Has been created and you account status is activated", "FBSO Team");
        }
        return redirect()->back()->with('success', 'User Added successfully.');
    }
    public function userscontact()
    {
        $user = Contact::all();
        $title = "Users Contact";
        $title1 = "Dashboard";
        return  view('Admin.contact.users', compact('user', 'title', 'title1'));
    }
    public function usersuserscontact($id)
    {
        Contact::find($id)->delete();
        return redirect()->back()->with('success', 'Contact Deleted successfully.');
    }

    public function usersdealerapproved()
    {
        $title = "Pending Dealer";
        $title1 = "Dealer";

        $user = User::join('assignprop', 'users.id', '=', 'assignprop.users_id')->select('*', 'assignprop.id as id')->where('agent_id', Auth::user()->id)->where('role_id', '3')->where('users.status', '1')->get();
        return view('Admin.pending.dealer', compact('title', 'title1', 'user'));
    }
    public function userspropertyapproved()
    {
        $title = "Pending Property";
        $title1 = "Property";
        $property = properties::join('assignprop', 'properties.id', '=', 'assignprop.users_id')
            ->select('properties.*', 'assignprop.*', 'assignprop.status as status', 'assignprop.id as id')
            ->where('assignprop.status', '1')
            ->where('agent_id', Auth::user()->id)->get();
        return view('Admin.pending.property', compact('title', 'title1', 'property'));
    }


    public function sendEmail($user, $message, $subj)
    {
        $to = $user->email;
        try {
            Log::info('Send Email' . $to);

            return Mail::raw($message, function ($message) use ($to, $subj) {
                $message->to($to)
                    ->subject($subj);
            });
        } catch (\Exception $e) {
            return $e;
        }
    }
}
