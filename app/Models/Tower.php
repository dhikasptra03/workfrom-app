<?php

namespace App\Models;

use App\Enums\TowerStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tower extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'guest_number', 'status', 'location', 'image', 'price', 'description'];

    protected $casts = [
        'status' => TowerStatus::class
    ];

    // Create method for relationship
    public function utilities()
    {
        return $this->belongsToMany(Utility::class, 'utility_tower');
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function cities()
    {
        return $this->belongsToMany(City::class, 'city_tower');
    }
}
