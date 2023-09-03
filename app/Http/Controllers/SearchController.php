<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Product;

class SearchController extends Controller
{
    //
    function search(){

        return view('pages.search');

    }

    function find(Request $request){
            $request->validate([
              'query'=>'required|min:2'
           ]);

           $search_text = $request->input('query');
           $products=Product::where('name','LIKE','%'.$search_text.'%')
                      ->paginate(2);
            return view('pages.search',['products'=>$products]);

    }
}
