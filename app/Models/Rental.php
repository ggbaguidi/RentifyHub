<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;

    protected $table = "rentals";

    protected $fillable = [
        'user_id',
        'car_id',
        'rent_start',
        'rent_end',
        'created_at',
        'updated_at',
    ]; // Add other columns as needed

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
