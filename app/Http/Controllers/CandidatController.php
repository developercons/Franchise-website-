<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Candidat;
use Auth;


class CandidatController extends Controller
{
    public function __construct()
    {
        $this->middleware('candidat');
    }

    public function modifyPage(){
        return view('candidat.modify');
    }

    public function modifyCandidat(Request $request){
        

         $candidat = Auth::guard('candidat')->user();
         if($request->target == "disponnibilite") {
            $candidat->disponibilite = $request->value;
         } else if ($request->target == "status"){
            $candidat->status = $request->value;
         }
         else {
             return $request->target;
            return response()->json([
                "success" => false
            ], 200);
         }

         $candidat->save();
         return response()->json([
            "success" => true
        ], 200);
          
    }
}
