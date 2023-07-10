<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galleries extends Model
{
    use HasFactory;
    protected $table = "galleries";
    protected $fillable = [
        'id',
        'image',
        'prop_id'
    ];
}
