<?php

namespace App\Models;

use App\Models\User;
use App\Models\Marque;
use App\Models\Categorie;
use App\Models\LocationVoiture;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nom',
        'description',
        'dimensions',
        'empattement',
        'poids_vide',
        'prix',
        'nombre_usager',
        'carburant',
        'cylindre',
        'garde_sol',
        'capacite_reservoir',
        'alimentation',
        'photo',
        'categorie_id',
        'marque_id',
        'user_id',
        'statut'
    ];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function marque()
    {
        return $this->belongsTo(Marque::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function locationVoitures()
    {
        return $this->hasMany(LocationVoiture::class);
    }
}
