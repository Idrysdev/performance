<?php

namespace App\Http\Controllers;

use App\Models\Matiere;
use Illuminate\Http\Request;
use Str;

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
            'active'  => ''
        ]);
       $data['slug'] = Str::slug($data['libelle']);
       $data['active'] =  (isset($data['active']) && $data['active'] == 'on') ? 1: 0;
       // dd($data);
       Matiere::create($data);
       return json_encode('success');
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
            'active'  => ''
        ]);
       $data['slug'] = Str::slug($data['libelle']);
       $data['active'] =  (isset($data['active']) && $data['active'] == 'on') ? 1: 0;
       $matiere->libelle = $data['libelle'];
       $matiere->slug = $data['slug'];
       $matiere->active = $data['active'];
       $matiere->save();
       return back();
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
