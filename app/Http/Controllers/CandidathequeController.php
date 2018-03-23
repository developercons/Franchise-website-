<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandidathequeController extends Controller
{
    public function index(){
        return view('candidatheque.home');
    }
}
