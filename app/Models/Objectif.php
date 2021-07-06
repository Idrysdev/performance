<?php

namespace App\Models;

use App\Models\Cour;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objectif extends Model
{

    use HasFactory;
    protected $guarded =[];

    
    public function cour()
    {
        return $this->belongsTo(Cour::class);
    }
}
