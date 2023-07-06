<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class propertytype extends Model
{
    use HasFactory;
    protected $table="propertytype";
    protected $fillable=[
        'name',
        'image'
    ];
}
