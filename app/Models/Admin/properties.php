<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class properties extends Model
{
    use HasFactory;
    protected $table='properties';
    protected $fillable=[
        'name',
        'type',
        'propertytypeid',
        'propertytypename',
        'address',
        'user_id',
        'image',
        'galler_id',
        'specification_id',
        'service_id',
    ];
}
