<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Cour;
use App\Models\Matiere;
use App\Models\Niveau;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $classes = Classe::take(4)->OrderBy('id','desc')->get();
        return view('front.index', compact('classes'));
    }

    public function cours($niveau,$classe){
        $classes = Classe::where('slug', $classe)->first();
        return $classes->cours;
    }

    public function matiere(){
        $matieres = Matiere::where('active',1)->get();
        return $matieres;
    }

    public function classe($slug){
        $classes = Classe::where('slug',$slug)->first();
        return $classes;

    }

    public function abonnement(){
        

    }

    public function conseils(){

    }

    public function contacts(){

    }


}
