<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shelter extends Model
{
    use HasFactory;
    protected $fillable = [
        'nameshelter',
        'location',
        'image'
    ];

    protected $table='shelter';    
}
