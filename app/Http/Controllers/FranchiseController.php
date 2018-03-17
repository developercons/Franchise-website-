<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Franchise;

class FranchiseController extends Controller
{
    public function singleFranchise($categorie,$id){
        $franchise = Franchise::find($id);
        return $franchise;
        return view('franchise.single');
    }
}
