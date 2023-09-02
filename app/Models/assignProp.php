<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assignProp extends Model
{
    use HasFactory;
    protected $table = 'assignprop';
    protected $fillable = [
        'users_id',
        'agent_id',
        'is_users',
        'status',
        'is_properties',
    ];
}
