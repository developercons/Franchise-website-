<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidat;
use Validator;
class FranchiseurController extends Controller
{
    public function __construct()
    {
        $this->middleware('franchiseur', ['except' => 'validateFranchiseur']);
    }


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

    public function validateFranchiseur(Request $request,$validate){
        
        if($validate == 'first') {
            $validation = Validator::make($request->all(), [
                'name' => 'required|max:255',
                'email' => 'required|email|max:255|unique:franchiseurs',
                'password' => 'required|min:6|confirmed|max:255',
                'owner' => 'required|max:255',
            ]);

            if($validation->fails()) {
                return response()->json([
                    "success" => false,
                    "errors"=>$validation->getMessageBag()
                ], 200);
    
            } else {
                return response()->json([
                    "success" => true,
                ], 200);
            }

        } else {

            $validation = Validator::make($request->all(), [
                'name' => 'required|max:255',
                'email' => 'required|email|max:255|unique:franchiseurs',
                'password' => 'required|min:6|confirmed|max:255',
                'description' => 'required|max:255',
                'apport' => 'required|max:255',
                'droit' => 'required|max:255',
                'owner' => 'required|max:255',
                'owner' => 'required|max:255',
                'owner' => 'required|max:255',
                'owner' => 'required|max:255',
                'owner' => 'required|max:255',
            ]);

            if($validation->fails()) {
                return response()->json([
                    "success" => false,
                    "errors"=>$validation->getMessageBag()
                ], 200);
    
            } else {
                return response()->json([
                    "success" => true,
                ], 200);
            }
        }



      
    }

}

