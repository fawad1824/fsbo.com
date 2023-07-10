<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class properties extends Model
{
    use HasFactory;
    protected $table = 'properties';
    protected $fillable = [
        'type',
        'ptype',
        'areaname',
        'size',
        'sizeM',
        'price',
        'bedrooms',
        'bathrooms',
        'name',
        'condition',
        'desc',
        'image',
        'amenities_id',
        'user_id',
        'status',
        'is_like'
    ];
}
