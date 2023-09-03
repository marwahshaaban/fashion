<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Event;
use Illuminate\Http\Request;
use App\Product;
use App\User;
use App\Events\ProductCreated;
use App\Order;

use Auth;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        \Event::dispatch(new ProductCreated());

        $products= cache ('products', function()
    {
        return Product::get();
    });
 
        return view('products.allproducts', ['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('products.addproduct');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=Auth::user();
        $product=new Product;
        $product->name=$request->name;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->priceafter=$request->price;
        $product->amount=$request->amount;
        $product->gender=$request->gender;
        $product->type=$request->type;


        if($request->hasFile('image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // FileName to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('image')->storeAs('public/product_images',$fileNameToStore);
        } else {
               $fileNameToStore = 'noimage.jpg';
           }
           $product->image=$fileNameToStore;
           $product->save();
           return redirect('/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $order=Order::find($id);
        return view('products.editproduct')->with('order',$order);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateorder( Request $request) {
        //dd($request);
        $order=Order::where('id',$request->id)->first();
        $order->name=$order->name;
        $order->num=$request->size;
        $order->save();
        return redirect('/myproduct')->with('success','Product successfully update.');

        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

    {

    }
    public function delete($id)

    {
        $prud=Order::find($id);

        $prud->delete();

        $products=Product::all();
        return redirect('/myproduct')->with('success','Product successfully delete.');
    }

}
