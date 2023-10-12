<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'company_name',
        'email',
        'tel_number',
        'res_date',
        'category_id',
        'tower_id',
        'guest_number',
    ];

    protected $dates = [
        'res_date' => 'datetime',
        'request_date' => 'datetime'
    ];

    // Create method for relationship
    public function tower()
    {
        return $this->belongsTo(Tower::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
