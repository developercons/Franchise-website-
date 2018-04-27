<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use Goutte;
use App\Test;

class ScrapingController extends Controller
{
    
    public $crawler;

    public function __construct(){
        $this->crawler = Goutte::request('GET', 'http://www.toute-la-franchise.com/franchise-10752-adopt.html');
    }


    public function startScraping() {
         return $this->uploadFranchise($this->getFranchiseLogo() , $this->getHtml('#presentationConcept') , $this->getHtml('#presentationConcept'));
    }


    public function getFranchiseLogo() {
        $logo_url = $this->crawler->filter('.essentielEsgImg img')->image()->getUri();
        //Uplod image to storage directory
        $img = file_get_contents($logo_url);
        $path = "scraping/logo/". basename($logo_url);
        Storage::disk('public')->put($path, $img);
        return Storage::disk('public')->url($path);
    }


    public function getHtml($nodeContainer) {
        //Select all images from element and Upload them to Storage directory
        $image_url =  $this->crawler->filter($nodeContainer . ' img')->each(function($node){
            $image_url= $node->image()->getUri();
            $image_name = basename($image_url);
            $img = file_get_contents($image_url);
            $path = 'scraping/'.$image_name;
            Storage::disk('public')->put($path, $img);
            return  Storage::disk('public')->url($path);
        });

        //Select HTML content and replace all image URL with local url
        $html =  $this->crawler->filter($nodeContainer)->html();
        foreach($image_url as $url ) {
            $image_name = '/images/zoom/' . basename($url);
            $concept = str_replace($image_name , $url, $html);
        }

        return $html;
    }

    public function getListOfFranchise(){
        foreach ( $crawler->filter('.linkFiche')->links() as $key => $value) {
                    dump($value->getUri());
             }   
    }


    public function uploadFranchise($image , $concept , $caracteristique) {
        $franchise = new Test();
        //Essential attributes
        $franchise->name = $this->crawler->filter('.titreFicheEsg')->eq(0)->text();
        $franchise->subcategorie_id = 1;
        // $franchise->subcategory = $this->crawler->filter('.filDArianne > li')->eq(1)->filter('a')->eq(0)->text();
        // $franchise->category = $this->crawler->filter('.filDArianne > li > a')->eq(0)->text();
        $franchise->short_description = $this->crawler->filter('.introFicheEsg')->eq(0)->text();
        $franchise->apport_personnel = substr($this->crawler->filter('.apportAideIcon1 > .montant')->eq(0)->text() ,0 , -2);
        $franchise->droits_entree = substr($this->crawler->filter('.apportAideIcon2 > .montant')->eq(0)->text() ,0 , -2);
        $franchise->aide_financement = ($this->crawler->filter('.apportAideIcon3 > .infoSupType1')->eq(0)->text()) == 'oui' ? 1 : 0;
        $franchise->formation = ($this->crawler->filter('.apportAideIcon4 > .infoSupType1')->eq(0)->text()) == 'oui' ? 1 : 0;
        $franchise->investissment_global = $this->crawler->filter('.investissementIcon1 > .txtIndicationType1')->eq(0)->text();
        $franchise->last_realisation = $this->crawler->filter('.investissementIcon2 > .txtIndicationType1')->eq(0)->text();

        //Other fields
        $others_fields = $this->crawler->filter('.col3Autres > li')->each(function($node) {
            $pos = strpos($node->text() , ':');
            return substr($node->text() , $pos + 2 );
        });
        $franchise->redevance_fonctionnement	 = $others_fields[0];
        $franchise->redevance_publicitaire = $others_fields[1];
        $franchise->royalties = $others_fields[2];
        $franchise->surface = $others_fields[3];
        $franchise->type_contract = $others_fields[4];

        //logo
        $franchise->image = $image;
        $franchise->concept = $concept;
        $franchise->caracteristique = $caracteristique;
        $franchise->is_active = false;
        
        $franchise->save();
        echo "success";
    }
}
