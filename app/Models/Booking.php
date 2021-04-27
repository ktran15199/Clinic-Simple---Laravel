<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'responser_id',
        'content',
        'status',
        'booking_time'
    ];

    protected $dates = ['created_at', 'updated_at', 'booking_time'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
