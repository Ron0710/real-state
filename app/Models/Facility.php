<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_id', // Foreign key to link to Property
        'name', // Name of the facility
    ];
    public function facilities()
{
    return $this->hasMany(Facility::class);
}
}