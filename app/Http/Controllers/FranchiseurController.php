<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidat;

class FranchiseurController extends Controller
{
    public function addFranchisePage(){
        return view('franchiseur.addFranchise');
    }

    public function candidatPage(){
        return view('franchiseur.listCandidat' , [
            "candidats" => Candidat::all()
        ]);
    }

    public function singleCandidatPage($id){
       
        return view('franchiseur.candidatDetail' , [
            "candidat" => Candidat::find($id)
        ]);
    }
}

