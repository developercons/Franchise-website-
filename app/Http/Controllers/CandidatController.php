<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Candidat;
use Auth;
use Storage;

class CandidatController extends Controller
{
    public function __construct()
    {
        $this->middleware('candidat');
    }

    public function modifyPage(){
        return view('candidat.modify');
    }

    public function modifyPageCandidat(Request $request){
        $validatedData = $request->validate([
            'nom' => 'required|max:100',
            'prenom' => 'required|max:100',
            'adresse' => 'required|max:255',
            'postal' => 'required|max:255',
            'countries' => 'required|max:255',
            'ville' => 'required|max:255',
            'telephone' => 'required|max:255',
            'apport_select' => 'required|max:255',
            'complement_select' => 'required|max:255',
            'avance_select' => 'required|max:255',
            'image' => 'mimes:jpg,jpeg,png|max:6000',
        ]);

        $candidat = Auth::guard('candidat')->user();
        $candidat->nom = $request->nom;
        $candidat->prenom = $request->prenom;
        $candidat->complement_apport = $request->complement_select;
        $candidat->apport_personnel = $request->apport_select;
        $candidat->avance_projet = $request->avance_select;
        $candidat->pays = $request->countries;
        $candidat->telephone = $request->telephone;
        $candidat->ville = $request->ville;
        $candidat->Adresse = $request->adresse;
        $candidat->code_postal = $request->postal;
        if($request->hasFile('image')) {
            $candidat->image = Storage::disk('public')->putFile('imageProfile', $request->image);
        }
        $candidat->save();
        $request->session()->flash('status', 'Vos informations ont bien été enregistrées        ');
        return redirect('candidatheque/candidat');
    }
    

    public function projectPage(Request $request) {
        return view('candidat.project');
    }

    public function modifyProjectPage(Request $request) {
        $validatedData = $request->validate([
            'cv' => 'required|mimes:pdf,word|max:6000',
            'lettre' => 'required|mimes:pdf,word|max:6000',
            'text_project' => 'required'
        ]);
        
    
        $candidat = Auth::guard('candidat')->user();
        $candidat->cv = Storage::disk('public')->putFile('cv', $request->cv);
        $candidat->lettre_motivation = Storage::disk('public')->putFile('lettre', $request->lettre);
        $candidat->projet = $request->text_project;
        $candidat->save();
        $request->session()->flash('status', 'Vos informations ont bien été enregistrées        ');
        return redirect()->route('candidatheque/candidat');

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

    public function addCompetence(Request $request) {
        return "sdsdssd";
    }
    // public function addCompetence(Request $request) {
    //     return response()->json([
    //         "success" => true
    //     ], 200);
    //     $request->validate([
    //         "skills"=> 'required'
    //     ]);

    //     return response()->json([
    //         "success" => true,
    //     ], 200);
    // }
}
