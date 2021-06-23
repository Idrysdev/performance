<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\niveau;
use Illuminate\Http\Request;
use Str;

class ClasseController extends Controller
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
        $niveaux = niveau::all();
        $classes = Classe::all();
        return view('admin.classe.create',compact('classes','niveaux'));
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
            'niveau_id'  => '',
        ]);
       $data['slug'] = Str::slug($data['libelle']);
       // dd($data);
       Classe::create($data);
       return json_encode('success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function show(Classe $classe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function edit(Classe $classe)
    {
        $niveaux = niveau::all();
        return view('admin.classe.edit',compact('classe','niveaux'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classe $classe)
    {
           $data = $this->validate($request,[
            'libelle' => 'required',
            'slug'    => '',
            'active'  => '',
            'niveau_id'  => '',
        ]);
       $data['slug'] = Str::slug($data['libelle']);
       $classe->libelle = $data['libelle'];
       $classe->slug = $data['slug'];
       $classe->active = $data['active'];
       $classe->niveau_id = $data['niveau_id'];
       $classe->save();
       return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classe $classe)
    {
         // dd($niveau);
        $classe->delete();
        return back();
    }
}
