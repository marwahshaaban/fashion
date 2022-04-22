<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User; 
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{ 
    public function __construct()
    {
        $this->middleware('auth');
    } 
    //myinformation : 
    public function myinfo () {
     $user=auth()->user();
     //dd($user); 
     return view('user.myinfo')->with('user',$user);

    } 
    public function home () {
     
      //dd($user); 
      return view('pages.fashion'); }
    //  
    public function fashion () {
     
      //dd($user); 
      return view('home'); }
    public function contact () {
     
      //dd($user); 
      return view('user.contactus'); } 
      
    public function showupdateinfo () {
        $user=auth()->user(); 
        return view('user.showupdateinfo')->with('user',$user);
   
       } 
       public function updateinfo (Request $request) 
       { 
         $this->validate($request,[ 
           'name'=>'required',
           'email'=>'required'
         ]);

        //dd($request); 
        $user=auth()->user();
        $user->name=$request->name; 
        $user->email=$request->email; 
        $user->save();
        return redirect('/myinfo')->with('success','your information updated');


       } 
       public function showchangepassword(){
        $user=auth()->user(); 
        if($user!=null)
        return view('user.showchangepassword');
   
       } 
       public function changepassword(Request $request){  
        $user=auth()->user(); 
        if(hash::check($request->oldpassword,$user->password)) {
          $user->password=Hash::make($request->newpassword);
          $user->save();
        return redirect('/myinfo');

        } 
        return redirect()->back();
        
 
        //dd($request); 
        //dd(hash::check($request->oldpassword,$user->password),$user->password,$request->oldpassword);

        

       } 
        public function allusers(){ 
          $user=auth()->user();
          if($user->role=='admin'){
           $allusers=User::where('role','user')->get();
          return View('user.allusers')->with('allusers',$allusers); 
        }
          return redirect()->back();
        } 
        public function deleteuser($id){ 
          $user=auth()->user();
          if($user->role=='admin'){
        $user=User::where('id',$id)->first();
       // $user=User::find($id); 
       $user->delete();
       return redirect('/allusers')->with('success','user deleted');
          } 
          return redirect()->back();
        } 
        public function upgraduser($id){ 
          $user=auth()->user();
          if($user->role=='admin'){
        $user=User::where('id',$id)->first(); 
        $user->role="admin"; 
       // $user=User::find($id); 
       $user->save();
       return redirect('/allusers')->with('success','user upgraded');
          } 
          return redirect()->back();
        }
        public function showupdate($id){ 
          $user=auth()->user();
          if($user->role=='admin'){ 
            $userinfo=User::where('id',$id)->first();
       return view('user.showupdate')->with('userinfo',$userinfo);
          } 
          return redirect()->back();
        } 
        public function update( Request $request) {
        //dd($request); 
        $user=User::where('id',$request->id)->first();
        $user->name=$request->name;
        $user->save();
        return redirect('/allusers')->with('success','user updated');
        } 
        //printname'
      
         
} 
