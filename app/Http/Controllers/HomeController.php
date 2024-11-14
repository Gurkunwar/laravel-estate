<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use App\Models\Favourite;
use App\Models\Property;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {
            return view('admin.home');
        } else {
            $data = Property::paginate(3);

            $user = auth()->user();

            $count = Favourite::where('phone', $user->phone)->count();

            return view('user.home', compact('data', 'count'));
        }
    }

    public function index()
    {

        if (Auth::id()) {
            return redirect('redirect');
        } else {
            $data = Property::paginate(3);
            return view('user.home', compact('data'));
        }
    }

    public function search(Request $request)
    {
        $search = $request->search;
        if ($search == '') {
            $data = Property::paginate(3);
            return view('user.home', compact('data'));
        }
        $data = Property::where('title', 'Like', '%' . $search . '%')->get();

        return view('user.home', compact('data'));
    }

    public function addfavourite(Request $request, $id)
    {
        if (Auth::id()) {
            $user = auth()->user();
            $property = Property::find($id);
            $favourite = new Favourite;
            $favourite->name = $user->name;
            $favourite->phone = $user->phone;
            $favourite->address = $user->address;
            $favourite->property_title = $property->title;
            $favourite->property_location = $property->location;
            $favourite->property_price = $property->price;
            $favourite->save();
            return redirect()->back()->with('message', 'Added To Favourites');
        } else {
            return redirect('login');
        }
    }

    public function showfavourite()
    {
        // Check if user is authenticated
        if (!auth()->check()) {
            return redirect('login')->with('message', 'Please log in to view your favourites.');
        }

        $user = auth()->user();
        $favourite = Favourite::where('phone', $user->phone)->get();
        $count = Favourite::where('phone', $user->phone)->count();

        return view('user.showfavourite', compact('count', 'favourite'));
    }

    public function deletefavourite($id)
    {
        $data = Favourite::find($id);
        $data->delete();

        return redirect()->back()->with('message', 'Removed from Favourites');
    }

    public function ourproperties()
    {
        if (Auth::check()) {
            $usertype = Auth::user()->usertype;

            if ($usertype == '1') {
                return view('admin.home');
            } else {
                $data = Property::paginate(6);
                $user = auth()->user();
                $count = Favourite::where('phone', $user->phone)->count();
            }
        } else {
            // For guests, don't calculate count
            $data = Property::paginate(6);
            $count = 0; // Set count to 0 for guests
        }

        return view('user.ourproperties', compact('data', 'count'));
    }

    public function aboutus()
    {
        if (Auth::check()) {
            $usertype = Auth::user()->usertype;

            if ($usertype == '1') {
                return view('admin.home');
            } else {
                $user = auth()->user();
                $count = Favourite::where('phone', $user->phone)->count();
            }
        } else {
            $count = 0;
        }

        return view('user.aboutus', compact('count'));
    }

    public function contactus()
    {
        if (Auth::check()) {
            $usertype = Auth::user()->usertype;

            if ($usertype == '1') {
                return view('admin.home');
            } else {
                $user = auth()->user();
                $count = Favourite::where('phone', $user->phone)->count();
            }
        } else {
            $count = 0;
        }

        return view('user.contactus', compact('count'));
    }

    public function showenquiries() {}

    public function submitenquiry(Request $request, $id)
    {
        $enquiry = new Enquiry();
        $property = Property::find($id);

        $enquiry->name = $request->name;
        $enquiry->email = $request->email;
        $enquiry->phone = $request->phone;
        $enquiry->message = $request->message;
        $enquiry->property_name = $property->title;

        $enquiry->save();

        return redirect()->back()->with('message', 'Your enquiry has been submitted successfully.');
    }
}
