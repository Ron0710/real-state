<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    // Specify the table if it's not plural of the model name
    protected $table = 'properties';

    // Define the fillable fields
    protected $fillable = [
        'name',
        'status',
        'location',
        'specific_location',
        'price_range',
        'units',
        'land_area',
        'development_type',
        'architectural_theme',
        'path',
        'view',
        'features'
    ];
}
