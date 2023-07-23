<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikeProperty extends Model
{
    use HasFactory;
    protected $table = "likeproperty";
    protected $fillable = [
        'user_id',
        'property_id',
        'is_like',
    ];
}
