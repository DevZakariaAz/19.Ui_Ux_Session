<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    use HasFactory;

    protected $fillable = ['cours', 'horaire', 'duree', 'formateur_id'];

    public function formateur()
    {
        return $this->belongsTo(Formateur::class);
    }

    public function absences()
    {
        return $this->hasMany(Absence::class);
    }
}
