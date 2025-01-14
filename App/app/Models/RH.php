<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RH extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'email'];

    public function rapports()
    {
        return $this->hasMany(Rapport::class);
    }

    public function absences()
    {
        return $this->hasMany(Absence::class);
    }
}
