<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'statut', 'seance_id', 'stagiaire_id'];

    public function seance()
    {
        return $this->belongsTo(Seance::class);
    }

    public function stagiaire()
    {
        return $this->belongsTo(Stagiaire::class);
    }

    public function rh()
    {
        return $this->belongsTo(RH::class);
    }
}
