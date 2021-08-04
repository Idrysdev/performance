<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Niveau;
use App\Models\Cour;

class Classe extends Model
{
    use HasFactory;
    protected $fillable  = ['libelle', 'slug','active','niveau_id'];



    public function niveau()
    {
        return $this->belongsTo(Niveau::class);
    }


    public function cours(){
        return $this->hasMany(Cour::class);
    }

}
