<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   
    public function redirect(){

        $userType= Auth::user()->userType;

      
        if($userType=='1'){
            return view('admin.home');
        }else{
            return view('user.home');
        }
    }

public function index(){

    if(Auth::id()){
        return redirect('home');
    }else{
    return view('user.home');

    }
}


public function about(){
    return view('user.about');
}

public function contact(){
    return view('user.contact');
}

public function shop(){
    return view('user.shop');
}

}
