<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\trendingProduct;

use Illuminate\Support\Facades\app;
use Session;

use App\Models\cart;

use Illuminate\Support\Facades\DB;
class productController extends Controller
{
    function index(){
       $pod=  product::all();
       $dta= cart::all();
//        $tPro1= DB::table('trending_products')->where('id',1)->first();
//        $tPro2= DB::table('trending_products')->where('id',2)->first();
//        $tPro3= DB::table('trending_products')->where('id',3)->first();
//        $tPro4= DB::table('trending_products')->where('id',4)->first();,'tPro1','tPro2','tPro3','tPro4'
    return view('product',compact('pod'));
        }

     function detail(string $id){
            // $trendingp=new trending_product;
              $trending=DB::table('products')->where('id',$id)->first();
             //$trending=trendingProduct::find($id);
             // return
     
             return view('detail',compact('trending'));
             }

   
     function search(Request $req){
      $prod= product::where('name','like','%'.$req->input('serch').'%')->get();
      return view('search',compact('prod'));
            
    }

    function addToCart(Request $req){
     
     if($req->session()->has('user')){
       $pId=$req->id;  
     $cart=new cart;
     $cart->userId=$req->session()->get('user')['id'];
     $cart->productId=$pId;
     $c=$cart->save();
  // dd($c);
    $data= DB::table('carts')->where('carts.userId',$req->session()->get('user')['id'])->join('products','carts.productId','products.id')->select('products.*')->get();
       return view('cartList',compact('data'));
 
    }
    else{
     return redirect('/product');
    }//first the  thing to that is that we have donr somr=ething which is c=very energetic that makes make the informt  

     
      // $pId=$req->id;
       

      //
      // return view('addToCart');
    }


    function about(String $lang=null){
      App::setlocale($lang);
        return view('about');
    }

    function cartList(){
      $userId=Session::get('user')['id'];
     $data= DB::table('carts')->join('products','carts.productId','products.id')->select('products.*')
      ->where('carts.userId',$userId)->get();
     // dd($data);
      return view('cartList',compact('data'));
    }

    function remove(String $id){
      cart::where('productId',$id)->delete();
      return redirect('/cartList');
    }
}
