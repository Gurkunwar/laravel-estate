<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function property()
    {
        if (Auth::id()) {
            if(Auth::user()->usertype=='1'){

                return view('admin.property');
            }
        } else {
            return redirect('login');
        }
    }

    public function uploadproperty(Request $request)
    {
        $data = new Property();
        $image = $request->file;
        $imageName = time() . '.' . $image->getClientOriginalExtension(); //it will write every img in db with a unique name using time
        $request->file->move('propertyimage', $imageName);
        $data->image = $imageName;

        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->des;
        $data->location = $request->location;

        $data->save();

        return redirect()->back()->with('message', 'Product Added Successfully');
    }

    public function showproperty()
    {
        $data = Property::all();
        return view('admin.showproperty', compact('data'));
    }

    public function deleteproperty($id)
    {
        $data = Property::find($id);
        $data->delete();

        return redirect()->back()->with('message', 'Product Deleted Successfully');
    }
    public function updateview($id)
    {
        $data = Property::find($id);

        return view('admin.updateview', compact('data'));
    }

    public function updateproperty(Request $request, $id)
    {
        $data = Property::find($id);
        $image = $request->file;
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $request->file->move('propertyimage', $imageName);
            $data->image = $imageName;
        }

        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->des;
        $data->location = $request->location;

        $data->save();

        return redirect()->back()->with('message', 'Product Updated Successfully');
    }

    public function showenquiries()
    {
        // $enquiry = Enquiry::all();

        // return view('admin.showenquiries', compact('enquiry'));
        return view('admin.showenquiries');
    }

    public function updatestatus($id)
    {
        // $enquiry = Enquiry::find($id);
        // $enquiry->status = 'delivered';
        // $enquiry->save();
        return redirect()->back();
    }
}
