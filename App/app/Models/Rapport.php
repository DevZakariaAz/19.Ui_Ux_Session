<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rapport extends Model
{
    use HasFactory;

    protected $fillable = ['contenu', 'dateCreation', 'rh_id'];

    public function rh()
    {
        return $this->belongsTo(RH::class);
    }
}
