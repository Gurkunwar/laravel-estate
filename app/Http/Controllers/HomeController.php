<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function redirect(){
        $usertype = Auth::user()->usertype;

        if($usertype == '1'){
            return view('admin.home');
        }
        else{
            $data = Property::paginate(3);
            return view('user.home', compact('data'));
        }
    }

    public function index(){

        if(Auth::id()){
            return redirect('redirect');
        }
        else{
            $data = Property::paginate(3);
            return view('user.home', compact('data'));
        }
    }
}
