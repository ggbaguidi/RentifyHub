<?php

namespace App\Models;

use App\Models\Car;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Marque extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'type_marque'
    ];

    public function cars(){
        return $this->hasMany(Car::class);
    }
}
