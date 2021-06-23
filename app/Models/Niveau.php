<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Classe;

class Niveau extends Model
{
    use HasFactory;
    protected $fillable  = ['libelle', 'slug','active'];


     public function classes()
    {
        return $this->hasMany(Classe::class);
    }

}
