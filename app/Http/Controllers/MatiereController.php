<?php

namespace App\Http\Controllers;

use App\Models\Matiere;
use Illuminate\Http\Request;
use Str;
use Storage;

class MatiereController extends Controller
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
        $matieres = Matiere::all();
        return view('admin.matiere.create', compact('matieres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $data = $this->validate($request,[
            'libelle' => 'required',
            'slug'    => '',
            'active'  => '',
            'icon'    => 'required',
        ]);
         // dd($data);
         if ($request->hasFile('icon')) {
            $destinationPath = 'assets/images/icons/'; //dossier de destination de la photo qu'on charge
            $file = $request->icon;
            $extension =  $file->getClientOriginalExtension(); //je recupère l'extension de l'image
            $fileName = md5(time()).".".$extension; //je donne un nom au fichier photo qui sera stocké (exemple: 2458.png)
            $file->move($destinationPath, $fileName); //je deplace l'image dans le dossier de destination
            // $input['icon'] = $fileName;
            $data['icon'] = $destinationPath.''.$fileName;
            // dd($fileName);
        }
        // dd($data);
       $data['slug'] = Str::slug($data['libelle']);
       Matiere::create($data);
       return back()->with('success','La matièrea été ajouter avec succèss !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Matiere  $matiere
     * @return \Illuminate\Http\Response
     */
    public function show(Matiere $matiere)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Matiere  $matiere
     * @return \Illuminate\Http\Response
     */
    public function edit(Matiere $matiere)
    {
        return view('admin.matiere.edit',compact('matiere'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Matiere  $matiere
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Matiere $matiere)
    {
         $data = $this->validate($request,[
            'libelle' => 'required',
            'slug'    => '',
            'active'  => '',
            'icon'  => ''
        ]);

        if ($request->hasFile('icon')) {
             // dd($data); 
            $old = $matiere->icon;
            $destinationPath = 'assets/images/icons/'; //dossier de destination de la photo qu'on charge
            $file = $request->icon;
            $extension =  $file->getClientOriginalExtension(); //je recupère l'extension de l'image
            $fileName = md5(time()).".".$extension; //je donne un nom au fichier photo qui sera stocké (exemple: 2458.png)
            $file->move($destinationPath, $fileName); //je deplace l'image dans le dossier de destination
            // $input['icon'] = $fileName;
            $data['icon'] = $destinationPath.''.$fileName;
             $matiere->icon   =  $data['icon'];
            // dd($fileName);
            
        }
        // dd($data); 
       $data['slug'] = Str::slug($data['libelle']);
       $matiere->libelle = $data['libelle'];
       $matiere->slug = $data['slug'];
       $matiere->active = $data['active'];
      
       $matiere->update();
       return back()->with('success','La matièrea été mise a jour avec succèss');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Matiere  $matiere
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matiere $matiere)
    {
        //
    }
}
