<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function login(Request $req){
    $user= User::where('email',$req->email)->first();
    if(!($user && Hash::check($req->password,$user->password))){
        return redirect('about');
    }
    else{
        $req->session()->put('user',$user);
        return redirect('/product');          //thus i
    }
    }
}
