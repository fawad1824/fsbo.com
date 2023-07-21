<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Admin\properties;
use App\Models\Admin\propertytype;
use App\Models\User;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        $propetyType = propertytype::all();
        $property = properties::select('properties.*')->where('status', '=', '0')->paginate(9);
        $userTeam = User::where('role_id', '3')->paginate('8');
        return view('User.index', compact('propetyType', 'userTeam', 'property'));
    }
    public function about()
    {
        $userTeam = User::where('role_id', '2')->paginate('8');
        return view('User.about', compact('userTeam'));
    }
    public function propertyView($id)
    {
        $property = properties::where('id', $id)->first();
        $propertylist = properties::select('properties.*')->where('status', '=', '0')->paginate(6);
        return view('User.singleProp', compact('property', 'propertylist'));
    }

    public function singleDealer($id)
    {
        $userTeam = User::where('id', $id)->first();
        $property = properties::select('properties.*')->where('status', '=', '0')->where('user_id', '=', $id)->paginate(6);
        return view('User.singleDealer', compact('property', 'userTeam'));
    }
    public function dealer()
    {
        $userTeam = User::where('role_id', '3')->paginate('8');
        return view('User.Dealer', compact('userTeam'));
    }
    public function properties()
    {
        $property  = properties::select('properties.*')->where('status', '=', '0')->paginate(6);
        return view('User.properties', compact('property'));
    }
    public function contact()
    {
        return view('User.contact');
    }

    public function terms()
    {
        return view('User.terms');
    }
    public function policy()
    {
        return view('User.privacy');
    }
}
