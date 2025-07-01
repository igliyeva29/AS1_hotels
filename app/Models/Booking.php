<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = [
        'id',
    ];

    protected $fillable = [
        'room_id',
        'guest_id',
        'check_in_at',
        'check_out_at',
    ];
    
    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function guest() : HasMany 
    {
        return $this->hasMany(Guest::class);
    }
}
