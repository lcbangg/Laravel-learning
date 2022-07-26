<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Listing;

class AdminController extends Controller
{
    public function loginPost(Request $request){
        $credentials= $request->only('email','password');

        if (Auth::guard('admin')->attempt($credentials)){
            return redirect()->route('admin.dashboard');
        }
        else{echo "false";}
    }
    public function dashboard(){
            $adminUser = Auth::guard('admin')->user();
            return view('admin.dashboard',['user'=>$adminUser]);
    }

    public function logout(){
        Auth::guard('admin')->logout();
    }

    public function manage_admin(){
        return view('listings.manage-admin',['listings'=>Auth::guard('admin')->user()->listings()->get()]);
    }
    
    public function edit_admin(Listing $listing){
        return view('listings.edit-admin',['listing'=>$listing]);
    }
}
