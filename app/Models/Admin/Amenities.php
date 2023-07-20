<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amenities extends Model
{
    use HasFactory;
    protected $table="amenities";
    protected $fillable=[
        'property_id',
        'property_kindid',
        'heading',
        'name'
    ];
}
