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

    public function searchBySecteur($secteur){
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
            "franchies" => Franchise::where('apport_personnel' , '<' , $apport)->get(),
            "searchApport"=>$searchApport,
        ]);
    }

    public function searchByApportAndSecteur($secteur, $apport){
            $secteur = str_replace('-', ' ' , $secteur);
            $subcategory = Subcategory::where('name' , 'like' , '%'.$secteur.'%' )->first();
            
            if($subcategory)
            {
                return view('franchise.index',[
                        "franchies" => $subcategory->franchise()->where('apport_personnel' , '<' , $apport)->get(),
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
