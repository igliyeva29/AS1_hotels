<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hotel extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = [
        'id',
    ];

    protected $fillable = [
        'city_id',
        'name',
        'address',
        'phone',
        'email',
        'image',
        'star',
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function room() : HasMany 
    {
        return $this->hasMany(Room::class);
    }

    public function guest() : HasMany 
    {
        return $this->hasMany(Guest::class);
    }
    public function booking() : HasMany 
    {
        return $this->hasMany(Booking::class);
    }
}
