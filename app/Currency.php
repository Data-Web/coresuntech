<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'shop_id'];

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
}
