<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Franchise;

class HomeController extends Controller
{
    public function index(){
        return view('home.index',[
            "franchies" => Franchise::take(10)->get(),
        ]);
    }
}
