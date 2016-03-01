<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'room_id', 'floor_id', 'shop_id'];

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function floor()
    {
        return $this->belongsTo(Floor::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
