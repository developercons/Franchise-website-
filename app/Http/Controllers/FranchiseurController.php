<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidat;
use Validator;
use Storage;
use App\Franchiseur;
use App\Franchise;
use Auth;
use Image;

class FranchiseurController extends Controller
{
    public function __construct()
    {
        $this->middleware('franchiseur', ['except' => ['validateFranchiseur' , 'addFranchisePage'] ]);
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


  


    public function validateFranchiseur(Request $request){
    
           $request->validate([
                'name' => 'required|max:255',
                'email' => 'required|email|max:255|unique:franchiseurs',
                'password' => 'required|min:6|confirmed|max:255',
                'description' => 'required|max:255',
                'apport' => 'required|max:255',
                'droit' => 'required|max:255',
                'owner' => 'required|max:255',
                'financement' => 'required|max:255',
                'formation' => 'required|max:255',
                'investissement' => 'required|max:255',
                'realisation' => 'required|max:255',
                'redevance_fonctionnement' => 'required|max:255',
                'redevance_publicitaire' => 'required|max:255',
                'Royalties' => 'required|max:255',
                'contrat' => 'required|max:255',
                'surface' => 'required|max:255',
                'categorie' => 'required|max:255',
                'image' => 'required|image',
                'summernote_concept' => 'required',
                'summernote_caracteristique' => 'required',
            ]);
            
           //Save image
          $Imagepath = "franchise/" . time().'.png';

          Image::make($request->file('image'))->resize(250, 250)->save('storage/'.$Imagepath);


          $detail=$request->summernote_concept;
 
           $concept =  $this->saveSummerNote($request->summernote_concept);
           $caracteristique =  $this->saveSummerNote($request->summernote_caracteristique);

            $franchise = new Franchise();
            $franchise->is_active = false;
            $franchise->Nom_franchiseur = $request->owner;
            $franchise->email_franchiseur = $request->email;
            $franchise->name = $request->name;
            $franchise->short_description = $request->description;
            $franchise->apport_personnel = $request->apport;
            $franchise->droits_entree = $request->droit;
            $franchise->aide_financement = intval($request->financement);
            $franchise->formation = intval($request->formation);
            $franchise->investissment_global = $request->investissement;
            $franchise->last_realisation = $request->realisation;
            $franchise->redevance_fonctionnement = $request->redevance_fonctionnement;
            $franchise->redevance_publicitaire = $request->redevance_publicitaire;
            $franchise->royalties = $request->Royalties;
            $franchise->type_contract = $request->contrat;
            $franchise->image = $Imagepath;
            $franchise->surface = $request->surface;
            $franchise->subcategorie_id = $request->categorie;
            $franchise->CONCEPT = $concept;
            $franchise->caracteristique = $caracteristique;

            $franchise->save();

            $franchiseur = Franchiseur::create([
                'email' =>$request->email,
                'franchise_id' => $franchise->id,
                'password' => bcrypt($request->password),
               ]);

            Auth::guard('franchiseur')->login($franchiseur);

            return redirect('candidatheque/franchiseur');
             
        }

        public function saveSummerNote($summernote){
            $detail= $summernote;
         
            $dom = new \domdocument();
            $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $images = $dom->getelementsbytagname('img');
        
            foreach($images as $k => $img){
                $data = $img->getattribute('src');
        
                
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
               
                $data = base64_decode($data);
                $image_name= time().$k.'.png';
        
               Storage::disk('public')->put('franchise/'.$image_name, $data);
                $path = Storage::url('franchise/'.$image_name);
        
                $img->removeattribute('src');
                $img->setattribute('src', $path);
                
               
            }
        
            $detail = $dom->savehtml();
            return $detail;
        }



}




