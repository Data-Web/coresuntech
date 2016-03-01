<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function floor()
    {
        return $this->belongsTo(Floor::class);
    }

    public function tables()
    {
        return $this->hasMany(Table::class);
    }
}
