<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingApp extends Model
{
    use HasFactory;
    protected $table = 'booking';
    protected $fillable = [
        'property_id',
        'user_id',
        'contactuser_id',
        'date',
        'time',
        'price',
        'phone',
        'email',
        'desciption',
        'booking_id',
        'appointment_id'
    ];
}
