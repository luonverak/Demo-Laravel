<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homePage(){
        return view('home');
    }
    public function addData(Request $request){
        $name = $request->input('name');
        return $name;
    }
}
