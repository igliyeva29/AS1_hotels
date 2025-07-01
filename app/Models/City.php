<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class City extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = [
        'id',
    ];

    protected $fillable = [
        'name',
    ];

    public function hotel() : HasMany 
    {
        return $this->hasMany(Hotel::class);
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
