<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'googlemap', 'guide', 'worktime', 'dayof', 'smoking', 'bring_pet', 'count_seat', 'count_room',
        'count_staff', 'user_id'
    ];

    public function networks()
    {
        return $this->hasMany(Network::class);
    }

    public function currencies()
    {
        return $this->hasMany(Currency::class);
    }

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }

    public function phones()
    {
        return $this->hasMany(Phone::class);
    }

    public function floors()
    {
        return $this->hasMany(Floor::class);
    }

    public function tables()
    {
        return $this->hasMany(Table::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
