<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Franchise;
use App\Post;
use App\Page;


class HomeController extends Controller
{
    public function index(){
        return view('home.espace');
    }

    public function home(){
        return view('home.index',[
            "franchies" => Franchise::take(10)->get(),
            "blogs" => Post::take(5)->get(),
        ]);
    }

    public function blog($slug){
        return view('blogs.single', [
            "post" => Post::where('slug' ,'=',$slug)->firstOrFail()
        ]);
    }

    public function blogPage(){
        return view('blogs.index',[
            "blogs" => Post::paginate(20),
        ]);
    }


    public function pages($slug){
        return $slug;
        return view('pages.index',[
            "page" => Page::where('slug', '=' , $slug),
        ]);
    }



}
