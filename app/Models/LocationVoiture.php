<?php

namespace App\Models;

use App\Models\Car;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class LocationVoiture extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'adresse',
        'ville',
        'pays',
        'maison',
        'societe',
        'date_location',
        'heure_location',
        'date_location_back',
        'heure_location_back',
        'card',
        'car_id',
        'user_id'
    ];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
