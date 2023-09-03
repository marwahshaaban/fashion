<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discount;
use App\Product;
use App\User;
use Auth;
use DateTime;
use DateInterval;
class discountcontroller extends Controller
{
    //
    public function alldiscount()
    {$user=Auth::user();
        if(Auth::user()->role=='admin'){
        $discounts=Discount::all();
        return view('discount.alldiscount')->with('discounts',$discounts);
    }}
    public function adddiscount () {
        $user=Auth::user();
        if(Auth::user()->role=='admin'){
        return view('discount.adddiscount');
        }
    }
public function discount (Request $request) {
   
$discount=new Discount();
if($request->discount=="products"){
    $dis=Discount::where("type",$request->product)->first();
  
    if($dis!=null){
        $dis->update(["amount"=>$request->amount + $dis->amount]);
    $dis->save();
    }
    else{
    $now = new DateTime();
    $day=$request->day;
    $interval = new DateInterval('P'.$day.'D');
    $lastDay = $now->add($interval);
    $discount->finish = $lastDay->format('Y-m-d');
    $discount->bill="nothing";
   $discount->product=$request->discount;
   $discount->type  =$request->product;
   $discount->amount=$request->amount;
   $discount->save();
   $products=Product::all();
   foreach($products as $product){
if($product->type==$request->product){
    $product->priceafter=($product->price)-(($product->price*$request->amount)/100);
    $product->save();
}
   }
}
   
  }
  
 if($request->discount=="bill"){
    $now = new DateTime();
    $day=$request->day;
    $interval = new DateInterval('P'.$day.'D');
    $lastDay = $now->add($interval);
    $discount->finish = $lastDay->format('Y-m-d');
    $discount->bill=$request->discount;
   $discount->product="nothing";
   $discount->type="nothing";
   $discount->amount=$request->amount;
   $discount->save();
  }
  return redirect('/alldiscount');
}
public function deletediscount($id) 

{ 
    $prud=Discount::find($id);
    $products=Product::all();
    foreach($products as $product){
        
        if($product->type==$prud->type){
           
            $product->priceafter=$product->price;
            $product->save();
        }

    }
    $prud->delete();
    
    return redirect('/alldiscount');
}
}