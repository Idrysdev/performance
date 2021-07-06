<?php

namespace App\Http\Controllers;

use App\Models\Chapitre;
use App\Models\Lecon;
use Illuminate\Http\Request;
use Str;

class ChapitreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function add_lecon(Request $request)
    {

        $this->validate($request,[
            'title' => 'required',
            'chapitre_id' => 'required',
            'video' => 'mimes:mp4,mov,avi,flv,wmv',
            'pdf'   => 'mimes:pdf'
        ]);

        if ($request->hasFile('video')) {
            $destinationPath = 'assets/videos/'; //dossier de destination de la photo qu'on charge
            $file = $request->video;
            // dd($file);
            $extension =  $file->getClientOriginalExtension(); //je recupère l'extension de l'image
            $fileName = md5(time()).".".$extension; //je donne un nom au fichier photo qui sera stocké (exemple: 2458.png)
            $file->move($destinationPath, $fileName); //je deplace l'image dans le dossier de destination
            // $input['icon'] = $fileName;
            $request->video = $destinationPath.''.$fileName;
             // $matiere->icon   =  $data['icon'];
            // dd($fileName);  
            // dd($request->video);

       
        }

        if ($request->hasFile('pdf')) {
            
            $destinationPath = 'assets/pdf/'; //dossier de destination de la photo qu'on charge
            $file = $request->pdf;
            // dd($file);
            $extension =  $file->getClientOriginalExtension(); //je recupère l'extension de l'image
            $fileName = md5(time()).".".$extension; //je donne un nom au fichier photo qui sera stocké (exemple: 2458.png)
            $file->move($destinationPath, $fileName); //je deplace l'image dans le dossier de destination
            // $input['icon'] = $fileName;
            $request->pdf = $destinationPath.''.$fileName;
            // dd($request->pdf);
             // $matiere->icon   =  $data['icon'];
            // dd($fileName);
            
       
        }

        Lecon::create([
            'title' =>$request->title,
            'slug'  =>Str::slug($request->title),
            'chapitre_id' =>$request->chapitre_id,
            'descriptif' =>$request->descriptif,
            'video' =>$request->video,
            'pdf'   =>$request->pdf
        ]);

        return back()->with('success' , 'vous avez ajouté un leçon .');


        dd($request->all());
    }


    public function  dell_lecon(Chapitre $chapitre, Lecon $lecon)
    {
        // dd($lecon);
        $lecon->delete();
        return back()->with('success', 'vous avez supprimer une leçon ');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chapitre  $chapitre
     * @return \Illuminate\Http\Response
     */
    public function show(Chapitre $chapitre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chapitre  $chapitre
     * @return \Illuminate\Http\Response
     */
    public function edit(Chapitre $chapitre)
    {
         
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chapitre  $chapitre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chapitre $chapitre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chapitre  $chapitre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chapitre $chapitre)
    {
        //
    }
}
