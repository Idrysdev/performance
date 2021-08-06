<?php

namespace App\Http\Controllers;

use App\Models\Niveau;
use Illuminate\Http\Request;
use Str;

class NiveauController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.niveau.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $niveaux = Niveau::all();
        return view('admin.niveau.create',compact('niveaux'));
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
            'active'  => ''
        ]);
       $data['slug'] = Str::slug($title)::slug($data['libelle']);

       // dd($data);
       Niveau::create($data);
        return back()->with('success','Le niveau a été mise a crée  avec succèss !');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Niveau  $niveau
     * @return \Illuminate\Http\Response
     */
    public function show(Niveau $niveau)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Niveau  $niveau
     * @return \Illuminate\Http\Response
     */
    public function edit(Niveau $niveau)
    {
        // dd($niveau);

        return view('admin.niveau.edit', compact('niveau'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Niveau  $niveau
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Niveau $niveau)
    {
        $data = $this->validate($request,[
            'libelle' => 'required',
            'slug'    => '',
            'active'  => ''
        ]);
       $data['slug'] = Str::slug($data['libelle']);
       $niveau->libelle = $data['libelle'];
       $niveau->slug = $data['slug'];
       $niveau->active = $data['active'];
       $niveau->save();
       return back()->with('success','Le Niveau a été mise a jour  avec succèss !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Niveau  $niveau
     * @return \Illuminate\Http\Response
     */
    public function destroy(Niveau $niveau)
    {
        // dd($niveau);
        $niveau->delete();
        return back()->with('success','Le niveau a été supprimer  avec succèss !');
    }
}
