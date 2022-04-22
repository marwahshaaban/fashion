<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class langController extends Controller
{
    // 
    public function swap($locale)
    {
        \Session::put('locale',$locale);
        return redirect()->back();
    }
}
