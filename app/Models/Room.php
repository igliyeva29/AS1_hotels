<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Room extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = [
        'id',
    ];

    protected $fillable = [
        'hotel_id',
        'room_number',
        'type',
        'per_night_price',
        'is_available',
    ];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function guest()
    {
        return $this->belongsTo(Guest::class);
    }

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
