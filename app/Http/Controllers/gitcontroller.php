<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gitcontroller extends Controller
{
    //function to return a view 
    public function index(){
        return view('welcome');
    }

}
