<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\BookingApp;
use App\Models\Admin\Galleries;
use App\Models\Admin\properties;
use App\Models\Admin\propertieskind;
use App\Models\Admin\Sectors;
use App\Models\LikeProperty;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use PDO;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function createProperty()
    {
        $title = "Add New Property";
        $title1 = "Home";

        $propertyKinds = propertieskind::all();
        $propertysector = Sectors::all();
        return view('Admin.Property.create', compact('title', 'title1', 'propertyKinds', 'propertysector'));
    }
    public function addProperty(Request $request)
    {
        // return $request->all();
        $property = new properties();
        $property->type = $request->TypeProperty;
        $property->ptype = $request->types;
        $property->ptype2 = $request->types2;
        $property->areaname = $request->areaname;
        $property->size = $request->area;
        $property->sizeM = $request->size;
        $property->price = $request->price;
        $property->bedrooms = $request->bedroom;
        $property->bathrooms = $request->bathroom;
        $property->name = $request->namep;
        $property->condition = $request->condition;
        $property->desc = $request->desc;
        $property->user_id = Auth::user()->id;
        $property->status = '10';
        $property->sectors = $request->sectors;
        if ($request->feature) {
            $property->feature = '1';
        }

        if ($request->hasFile('fileinput1')) {
            $image = $request->file('fileinput1');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $property->image = $imageName;
        }
        $property->save();

        if ($request->hasFile('fileinput')) {
            $images = $request->file('fileinput');

            foreach ($images as $image) {
                if ($image->isValid()) {
                    $imageName = time() . '.' . $image->getClientOriginalName();
                    $image->move(public_path('images'), $imageName);
                    $gallery = new Galleries();
                    $gallery->image = $imageName;
                    $gallery->prop_id = $property->id;
                    $gallery->save();
                }
            }
        }
        $user = User::where('id', Auth::user()->id)->first();
        $this->sendEmail($user, "Hi " . $user->name . " ! "  . 'Your Property Has Been Added wait for admin Approval Thanks!', " " . "FBSO Team");
        return redirect()->back()->with('success', 'property Added successfully.');
    }

    public function Listproperty($type)
    {
        $property = properties::select('properties.*')->where('type', '=', $type)->get();
        if ($type == 'rent') {
            $title = "Rent Properties";
            $title1 = "Properties";
            return view('Admin.Property.rent', compact('property', 'title', 'title1'));
        } else if ($type == 'sell') {
            $title = "Sell Properties";
            $title1 = "Property";
            return view('Admin.Property.sell', compact('property', 'title', 'title1'));
        } else if ($type == 'buy') {
            $title = "Buy Properties";
            $title1 = "Property";
            return view('Admin.Property.buy', compact('property', 'title', 'title1'));
        }
    }
    public function ListpropertyDelete($id)
    {
        properties::find($id)->delete();
        Galleries::where('prop_id', $id)->first()->delete();
        return back();
    }
    public function Listpropertyedit($id)
    {
    }
    public function myBooking($type)
    {
        if ($type == 'my_booking') {
            $title = "My Booking";
            $title1 = "Home";
        } else if ($type == 'user_booking') {
            $title = "All Booking";
            $title1 = "Home";
        } else if ($type == 'my_appointment') {
            $title = "My Appointment";
            $title1 = "Home";
            $booking = BookingApp::where('appointment_id', '1')->get();
        } else if ($type == 'users_appointment') {
            $title = "All Appointment";
            $title1 = "Home";
            $booking = BookingApp::where('appointment_id', '1')->get();
        }
        return view('Admin.booking.booking', compact('title', 'title1', 'type'));
    }
    public function myBookingdelete($id)
    {
        $bookingUser = BookingApp::find($id);
        $user = User::where('id', $bookingUser->user_id)->first();
        BookingApp::find($id)->delete();
        if ($bookingUser->booking_id == '1') {
            $this->sendEmail($user, "Hi " . $user->name . " ! "  . 'Your Booking has Been Deleted', " " . "FBSO Team");
        } else if ($bookingUser->appointment_id == '1') {
            $this->sendEmail($user, "Hi " . $user->name . " ! "  . 'Your Appointment has Been Deleted', " " . "FBSO Team");
        }
        return redirect()->back()->with('success', 'Booking Deleted successfully.');
    }
    public function Bookingstatus(Request $request)
    {
        $book = BookingApp::where('id', $request->pID)->where('contactuser_id', $request->UID)->first();
        if ($request->status == '3') {
            $prop = properties::where('id', $book->property_id)->first();
            $prop->status = $request->status;
            $prop->save();
        }
        $book->status = $request->status;
        $book->save();
        $user = User::where('id', $book->user_id)->first();
        $user2 = User::where('id', $book->contactuser_id)->first();
        $prop = properties::where('id', $book->property_id)->first();
        if ($request->status == '0') {
            $this->sendEmail($user2, "Hi " . $user2->name . " ! "  . 'You are Rejected this Booking ' . $prop->name, " " . "FBSO Team");
            $this->sendEmail($user, "Hi " . $user->name . " ! "  . 'Your Booking ' . $prop->name . ' Has Been Rejected Thanks!', " " . "FBSO Team");
        } else if ($request->status == '1') {
            $this->sendEmail($user2, "Hi " . $user2->name . " ! "  . 'You are Pedning this Booking ' . $prop->name, " " . "FBSO Team");
            $this->sendEmail($user, "Hi " . $user->name . " ! "  . 'Your Booking ' . $prop->name . ' Has Been Pending Thanks!', " " . "FBSO Team");
        } else if ($request->status == '2') {
            $this->sendEmail($user2, "Hi " . $user2->name . " ! "  . 'You are Accept Booking ' . $prop->name, " " . "FBSO Team");
            $this->sendEmail($user, "Hi " . $user->name . " ! "  . 'Your Booking ' . $prop->name . ' Has Been Accept Thanks!', " " . "FBSO Team");
        } else if ($request->status == '3') {
            $this->sendEmail($user2, "Hi " . $user2->name2 . " ! "  . 'Your Property Have Been Sold  ' . $prop->name, " " . "FBSO Team");
            $this->sendEmail($user, "Hi " . $user->name . " ! "  . 'Your Booking ' . $prop->name . ' Has Been Sold To You Thanks!', " " . "FBSO Team");
        }
        return redirect()->back()->with('success', 'Booking Status successfully.');
    }
    public function propertyLike()
    {
        $title = "Like Propety";
        $title1 = "Home";
        $property = LikeProperty::join('properties', 'likeproperty.property_id', 'properties.id')->where('likeproperty.user_id', Auth::user()->id)->select('*')->where('is_like', '1')->get();
        return view('Admin.Property.Like', compact('title', 'title1', 'property'));
    }
    public function propertyApproved(Request $request)
    {
        $prop = properties::where('id', $request->pID)->first();

        $prop->status = $request->status;
        $prop->save();
        $user = User::where('id', $prop->user_id)->first();
        if ($request->status == '2') {
            $this->sendEmail($user, "Hi " . $user->name . " ! "  . 'Your Property ' . $prop->name . ' Not Approval by Admin Thanks!', " " . "FBSO Team");
        } else if ($request->status == '0') {
            $this->sendEmail($user, "Hi " . $user->name . " ! "  . 'Your Property ' . $prop->name . ' Approval By Admin Thanks!', " " . "FBSO Team");
        }
        return redirect()->back()->with('success', 'Property Approved.');
    }
    public function sendEmail($user, $message, $subj)
    {
        $to = $user->email;
        try {
            return Mail::raw($message, function ($message) use ($to, $subj) {
                $message->to($to)
                    ->subject($subj);
            });
        } catch (\Exception $e) {
            return $e;
        }
    }
}
