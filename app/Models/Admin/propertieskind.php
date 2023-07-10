<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class propertieskind extends Model
{
    use HasFactory;
    protected $table = "propertieskinds";
    protected $fillable = [
        'name',
        'icon',
        'headingname',
        'is_headingid',
        'is_propertykind',
        'is_propertyfeature'
    ];
}
