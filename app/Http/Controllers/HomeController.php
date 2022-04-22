<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Product;
use App\user;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    } 
    public function myproduct() { 
        // return view('home'); 
        $user=Auth::user();
        $products=Product::where('user_id',$user->id)->get();
        return view('products.myproduct',['products'=>$products]);
    } 
    //assignto
    public function assignto ($id) { 
        $user=Auth::user();
        if($user->role=='admin'){
        //$user=User::where('role','user')->get();
        $users=User::all();
        $product=Product::find($id);
        return view('admin.assignto')->with('users', $users)->with('product',$product);
        }
    } 
    public function assign (Request $request){ 
        //dd($request); 
        $user=Auth::user();
        if($user->role=='admin'){
        $product=Product::find($request->product_id);
        $product->user_id=$request->user_id;
        $product->save();
        return redirect('/products');

    } } 
}
