<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Reservation;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use DateTime;
use DateInterval;
use DateInterval\date_diff;
class reservationcontroller extends Controller
{
    public function addreservation($id)
    {
        $prud=Product::find($id);
        return view('reservations.add reservation')->with('prud',$prud);
        
    }
    public function reser(Request $request){
        $user=Auth::user();
        $reser=new Reservation();
        $reser->name=$request->name;
        $reser->number=$request->number;
        $reser->reservationstart=new DateTime();
       
        $reser->reservationfinish= new DateTime($request->date);
     
        $reser->product_id=$request->id;
        $reser->user_id=$user->id;;
        $reser->save();
        $revs=Reservation::all();
       
        return view('reservations.allreservations')->with('revs',$revs);
    }
    public function allreservation(){
        $revs=Reservation::all();
       
        return view('reservations.allreservations')->with('revs',$revs);
    }
    public function delete($id){
        $user=auth()->user();
                  if($user->role=='admin'){
       Reservation::where('id',$id)->delete();
       $revs=Reservation::all();
        return view('reservations.allreservations')->with('revs',$revs);
    }
    $revs=Reservation::all();
        return view('reservations.allreservations')->with('revs',$revs);
}
    public function deletereservation($id){
        $user=Auth::user();
       
      $one=  Reservation::where('id',$id)->first();
     
      if($user->id==$one->user_id){
        
          $one->delete();
        $revs=Reservation::all();
         return view('reservations.allreservations')->with('revs',$revs);
        }
        $revs=Reservation::all();
        return view('reservations.allreservations')->with('revs',$revs);
    }
}

