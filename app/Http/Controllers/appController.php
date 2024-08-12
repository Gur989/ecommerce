<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\party;

class appController extends Controller
{
   public function about(){
        return view('about');
    }

    

   public function index(){
//create
//    $party = new Party;
//    $party->fullname="Tajwinder singh";
//    $party->save();
 //return "data is inserted in the database";



 //read or select
//    $id=1 ;
//     $party=party::find($id);
    //$party=party::where("email","name of the email")->get();
   // return dd($party);

// //update
//    $id=1;
//    $party=party::find($id);
//    $party->fullname="Tajvinder kaur";
//    $party->save();
//    return "Update data is saved in the database";

//delete 
$id=5;
$party=party::find($id);
$party->delete();
return "Your data is deleted";

    //   $name="Aniket singh";
    //  $age= 45;
    // // //  return view('welcome',compact('name','age'));
    // //  return view('welcome')->with('name',$name)->with('age',$age);
    //  return view('welcome',['name'=>$name,'age'=>$age]);
    }
    


}


