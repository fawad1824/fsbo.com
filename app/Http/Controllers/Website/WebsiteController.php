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
        $userTeam = User::where('role_id', '2')->paginate('8');
        return view('User.index', compact('propetyType', 'userTeam', 'property'));
    }
    public function about()
    {
        $userTeam = User::where('role_id', '2')->paginate('8');
        return view('User.about', compact('userTeam'));
    }
    public function propertyView($id){
        $property=properties::where('id',$id)->first();
        $propertylist = properties::select('properties.*')->where('status', '=', '0')->paginate(6);
        return view('User.singleProp',compact('property','propertylist'));
    }
}
