<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecon extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function chapitre()
    {
        return $this->belongsTo(Chapitre::class);
    }


}
