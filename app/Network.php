<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Network extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'password', 'shop_id'];

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
}
