<?php

namespace App\Http\Controllers;

use App\Models\Cour;
use App\Models\Matiere;
use App\Models\Classe;
use App\Models\Chapitre;
use Illuminate\Http\Request;
use Str;

class CourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $cours = Cour::all();
        return view('admin.cour.index',compact('cours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cours = Cour::all();
        $classes  = Classe::where('active',1)->get();
        $matieres = Matiere::where('active',1)->get();
        return view('admin.cour.create',compact('cours', 'matieres', 'classes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $cour = new Cour;
        $cour->title = $request->title;
        $cour->matiere_id = $request->matiere_id;
        $cour->classe_id = $request->classe_id;
        $cour->duree = $request->heure;
        if ($request->hasFile('image')) {
            // dd($request->all());
            $destinationPath = 'assets/images/cours/'; //dossier de destination de la photo qu'on charge
            $file = $request->image;
            $extension =  $file->getClientOriginalExtension(); //je recupère l'extension de l'image
            $fileName = md5(time()).".".$extension; //je donne un nom au fichier photo qui sera stocké (exemple: 2458.png)
            $file->move($destinationPath, $fileName); //je deplace l'image dans le dossier de destination
            // $input['icon'] = $fileName;
            $cour->image = $destinationPath.''.$fileName;
             // $matiere->icon   =  $data['icon'];
            // dd($fileName);
            
        }
        $cour->description = $request->description;
        $cour->save();
        return back()->route('cour.create')->with('success' ,' ok ');
    }


    public function add_video(Request $request , Cour $cour){

            $this->validate($request,[
                'video_intro' => 'mimetypes:video/avi,video/mpeg,video/mp4,video/quicktime'
            ]);
         if ($request->hasFile('video_intro')) {
            // $video = $request->all();
             // dd($video);   
            // dd($request->all());
            $destinationPath = 'assets/videos/intro/'; //dossier de destination de la photo qu'on charge
            $file = $request->video_intro;
            // dd($file);
            $extension =  $file->getClientOriginalExtension(); //je recupère l'extension de l'image
            $fileName = md5(time()).".".$extension; //je donne un nom au fichier photo qui sera stocké (exemple: 2458.png)
            $file->move($destinationPath, $fileName); //je deplace l'image dans le dossier de destination
            // $input['icon'] = $fileName;
            $cour->video_intro = $destinationPath.''.$fileName;
            $cour->update();
            return back()->with('success' , 'vous avez ahjouter la video introductive du cours');
             // $matiere->icon   =  $data['icon'];
            // dd($fileName);
            
       
        }
    }

    public function add_chapitre(Request $request,Cour $cour){

        
        $data =$this->validate($request,[
            'titre' => 'required|min:5',
            'cours_id'=> 'required'
        ]);

        Chapitre::create([
            'title' => $data['titre'],
            'slug' => Str::slug($data['titre']),
            'cours_id' =>$request->cours_id,
        ]);

        return redirect()->back()->with('success' ,' un chapitre a été ajouté avec succèss !');

       
    }









    public function update_image(Request $request, Cour $cour){

         if ($request->hasFile('image')) {
            // $video = $request->all();
             // dd($video);   
            // dd($request->all());
            $destinationPath = 'assets/images/cours/'; //dossier de destination de la photo qu'on charge
            $file = $request->image;
            // dd($file);
            $extension =  $file->getClientOriginalExtension(); //je recupère l'extension de l'image
            $fileName = md5(time()).".".$extension; //je donne un nom au fichier photo qui sera stocké (exemple: 2458.png)
            $file->move($destinationPath, $fileName); //je deplace l'image dans le dossier de destination
            // $input['icon'] = $fileName;
            $cour->image = $destinationPath.''.$fileName;
            $cour->update();
            return back()->with('success' , 'vous avez ahjouter la video introductive du cours');
             // $matiere->icon   =  $data['icon'];
            // dd($fileName);
        }


    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cour  $cour
     * @return \Illuminate\Http\Response
     */
    public function show(Cour $cour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cour  $cour
     * @return \Illuminate\Http\Response
     */
    public function edit(Cour $cour)
    {
         $cours = Cour::all();
        $classes  = Classe::where('active',1)->get();
        $matieres = Matiere::where('active',1)->get();
        $chapitres = Chapitre::all();
        return view('admin.cour.edit',compact('cour','classes','matieres','chapitres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cour  $cour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cour $cour)
    {
        $data = $request->all();
        $cour->title = $request->title;
        $cour->matiere_id = $request->matiere_id;
        $cour->classe_id = $request->classe_id;
        $cour->duree = $request->duree;
        if ($request->hasFile('image')) {
            // $video = $request->all();
             // dd($video);   
            // dd($request->all());
            $destinationPath = 'assets/images/cours/'; //dossier de destination de la photo qu'on charge
            $file = $request->image;
            // dd($file);
            $extension =  $file->getClientOriginalExtension(); //je recupère l'extension de l'image
            $fileName = md5(time()).".".$extension; //je donne un nom au fichier photo qui sera stocké (exemple: 2458.png)
            $file->move($destinationPath, $fileName); //je deplace l'image dans le dossier de destination
            // $input['icon'] = $fileName;
            $cour->image = $destinationPath.''.$fileName;
            
             // $matiere->icon   =  $data['icon'];
            // dd($fileName);
            
       
        }
        $cour->description = $request->description;
        $cour->update();
        return back()->with('success' , 'vous avez  la video introductive du cours');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cour  $cour
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cour $cour)
    {
        //
    }
}
