<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'image'];

    // Create method for relationship
    public function utilities()
    {
        return $this->belongsToMany(Utility::class, 'category_utility');
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
