<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utility extends Model
{
    use HasFactory;

    // Create method for relationship
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_utility');
    }

    public function towers()
    {
        return $this->belongsToMany(Tower::class, 'utility_tower');
    }
}
