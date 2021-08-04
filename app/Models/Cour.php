<?php

namespace App\Models;

use App\Models\Chapitre;
use App\Models\Objectif;
use App\Models\Classe;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cour extends Model
{
    use HasFactory;
    protected $guarded =[];


    public function chapitres()
    {
        return $this->hasMany(Chapitre::class , 'cours_id');
    }

     public function objectifs()
    {
        return $this->hasMany(Objectif::class);
    }

    public function classe(){
        return $this->belongsTo(Classe::class);
    }




}
