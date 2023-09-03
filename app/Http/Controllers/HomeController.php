<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Product;
use App\user;
use App\Order;
use App\Bill;
use App\Discount;
use Illuminate\Support\Facades\Crypt;
use  PDF;
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

        $user=Auth::user();
        $products=Order::where('user_id',$user->id)->get();
        $discountes=Discount::where('product','products')->get();
        $size=0;
        foreach ($products as $product){

            $product->priceafterdiscount=($product->price);
        foreach ($discountes as $discount){

            if($discount->type==$product->type){

                $product->priceafterdiscount=($product->price)-(($product->price*$discount->amount)/100);
            }}
           $product->pricetotal= ($product->num)* $product->priceafterdiscount;
      $product->save();
      $size=$size+$product->pricetotal;
        }
        $size1=$size;
        $dis=Discount::where('bill','bill')->first();
if($dis!=null){
    $size1=($size)-(($size*$dis->amount)/100);

}

        return view('products.myproduct',compact( "products",'size','size1'));
    }
    public function pdf() {
        $user=Auth::user();
        $products=Order::where('user_id',$user->id)->get();
        $pdf=PDF::loadview('products.pdf', compact('products'));

    return $pdf->download('bill.pdf');
}
    public function bagto ($id) {


        $can=Product::find($id);

        return view('products.getorder')->with('can', $can);

    }
    public function bag (Request $request){
        $this->validate($request,[
            'size'=>'required',

          ]);

        $user=Auth::user();
        $candy=Product::find($request->can_id);

        $discountes=Discount::where('product','products')->get();
        $order=new Order;
        //  dd($pizza);
        if($request->size<=$candy->amount){

            $product=Order::where("user_id",$user->id)->where("product_id",$candy->id)->first();

            if($product!=null){


                $product->update(["num"=>$request->size + $product->num]);
                $product->save();

                $candy->amount=$candy->amount-$request->size;
        $candy->save();
            }
            else{
        $order->priceafterdiscount=$candy->price;
        foreach ($discountes as $discount){

            if($discount->type==$candy->type){
                $order->priceafterdiscount=($candy->price)-(($candy->price*$discount->amount)/100);
            }}
        $order->name=$candy->name;
        $order->type=$candy->type;
        $order->num=$request->size;
        $order->pricetotal=($request->size)*$order->priceafterdiscount;
        //  dd($order);
        $order->description=$candy->description;
        // dd($order);
        $order->price=$candy->price;
        $order->user_id=$user->id;
        $order->product_id=$candy->id;
        $order->image=$candy->image;
        $candy->amount=$candy->amount-$request->size;
        $candy->save();
        $order->save();

    }

        return redirect('/myproduct')->with('success','Product successfully added.'); }


        else if($request->size>$candy->amount){

             }
             return redirect()->back()->with('error','Sorry,This number is not available now, note that it will be available soon');
           if($candy->amount==0){
                 $candy->delete();
           }


    }
    //assignto

    public function buy () {
    return view('products.addbill');
    }


    public function ship (Request $request) {
     $user=Auth::user();
     $products=Order::where('user_id',$user->id)->get();

  foreach ($products as $product) {
   $bill=new Bill();
   $bill->username=$request->username;
   $des=$request->adress;
   $bill->adress=Crypt::encryptString($des);
   $bill->name=$product->name;
   $bill->num=$product->num;
   $bill->pricetotal= $product->pricetotal;
   //  dd($order);
   $bill->description=$product->description;
   // dd($order);
   $bill->price=$product->price;
   $bill->user_id=$user->id;

   $bill->image=$product->image;

   $bill->save();
   $product->delete();
        }
        return redirect('/myproduct');


    }
   
    function adminproduct(){
        $products=Product::all();
        return view('products.adminproduct')->with('products',$products);
    }
    public function deleteproduct($id)

    {
        $prud=Product::find($id);

        $prud->delete();

        return redirect('/products');
    }
    public function editproduct($id)
    {
        //
        $product=Product::find($id);
        return view('products.edit')->with('product',$product);
    }
    public function updatproduct( Request $request) {
        //dd($request);
        $product=Product::where('id',$request->id)->first();
        $product->amount=$request->amount;
        $product->price=$request->price;
        $product->save();
        return redirect('/adminproduct');
        }
}
