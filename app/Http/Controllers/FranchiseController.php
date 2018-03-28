<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Franchise;
use App\Subcategory;
use App\Category;
use Response;
use Session;


class FranchiseController extends Controller
{
    public function index(Request $request){
        return view('franchise.index',[
            "franchies" => Franchise::all(),
        ]);
    }

    public function demandeIndex(){
        return view('franchise.request');
    }

    public function sendRequest(Request $request){
        $request->validate([
            'ev_select' => 'required|not_in:0',
            'nom' => 'required|max:255',
            'prenom' => 'required|max:255',
            'address' => 'required|max:255',
            'postal' => 'required|max:15',
            'ville' => 'required|max:255',
            'telephone' => 'required|digits:10',
            'email' => 'required|email|max:255',
            'secteur' => 'required|max:255',
            'apport_select' => 'required|max:255',
            'avance_projet_select' => 'required|max:255',
            'txt-parcours' => 'required|max:255',
        ]);
    }

    public function singleFranchise($categorie,$id){
        $franchise = Franchise::find($id);
        $subcategory = $franchise->subcategory()->first();
        $category = $subcategory->category()->first();
        if($franchise) {
            return view('franchise.single',[
                "franchise" => $franchise,
                "subcategory" => $subcategory,
                "category" => $category
            ]);
        }
        return view('404');
    }
    
    public function searchByName($name){
        
        return view('franchise.index',[
            "franchies" => Franchise::where('name' , 'like' , '%'.$name.'%')->get(),
            "searchName" => $name
        ]);
    }

    public function searchByCategory($category){
        $category = str_replace('-', ' ' , $category);
        return Category::where('name', '=' , $category)->subcategory->get();
        return view('franchise.index',[
            "franchies" => Category::where('name', '=' , $category)->subcategory->get()
        ]); 
    }

    public function searchBySecteur($secteur){
        
            if($secteur =="all_categories"){
                return view('franchise.index',[
                    "franchies" => Franchise::all(),
                    "searchSecteur"=>$secteur
                ]);
            }

            $secteur = str_replace('-', ' ' , $secteur);
            $subcategory = Subcategory::where('name' , 'like' , '%'.$secteur.'%' )->first();
             
            if($subcategory)
            {
               return view('franchise.index',[
                    "franchies" => $subcategory->franchise()->get(),
                    "searchSecteur"=>$secteur
                ]);
            }

            return view('franchise.index',[
                "franchies" => "",
            ]);
        }
    
    public function searchByApport($apport){
        return view('franchise.index',[
            "franchies" => Franchise::where('apport_personnel' , '<=' , $apport)->get(),
        ]);
    }

    public function searchByApportAndSecteur($secteur, $apport){
            if($secteur =="all_categories"){
                return view('franchise.index',[
                    "franchies" => Franchise::where('apport_personnel' , '<=' , $apport)->get(),
                    "searchSecteur"=>$secteur
                ]);
            }

            $secteur = str_replace('-', ' ' , $secteur);
            $subcategory = Subcategory::where('name' , 'like' , '%'.$secteur.'%' )->first();
            
            if($subcategory)
            {
                return view('franchise.index',[
                        "franchies" => $subcategory->franchise()->where('apport_personnel' , '<=' , $apport)->get(),
                    ]);
            }

            return view('franchise.index',[
                "franchies" => "",
                "searchSecteur"=>$searchSecteur
            ]);
    }
    
    public function addRequestFranchise(Request $request){
      if($request->ajax()){
        $request->session()->put('franchiseList', $request->requestedItem);
        return   response( $request->session()->get('franchiseList'), 200)
                ->header('Content-Type', 'application/json'); 
      }  
    }

    public function removeRequestFranchise(Request $request){
        if($request->ajax()){
            $franchiseList = $request->session()->get('franchiseList',[]);
            foreach ($franchiseList as $key => $value) {
                if($value["id"] == $request->id){
                    unset($franchiseList[$key]);
                }
            }
            $request->session()->put('franchiseList', array_values($franchiseList));
            return  response($request->session()->get('franchiseList') , 200)
                ->header('Content-Type', 'application/json');
        }
    }
}
