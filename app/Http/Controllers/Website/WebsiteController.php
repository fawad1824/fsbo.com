<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Admin\propertytype;
use App\Models\User;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        $propetyType=propertytype::all();
        $userTeam=User::where('role_id','2')->paginate('8');
        return view('User.index',compact('propetyType','userTeam'));
    }
    public function about()
    {
        return view('User.about');
    }
}
