<?php

namespace App\Models;

use App\Models\Cour;
use App\Models\Lecon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapitre extends Model
{
    use HasFactory;

    protected $guarded= [];


    public function lecons()
    {
        return $this->hasMany(Lecon::class);
    }


    public function cour()
    {
        return $this->belongsTo(Cour::class);
    }



   

}





 