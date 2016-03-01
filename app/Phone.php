<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $fillable = ['country_code', 'label', 'phone_number', 'landline_number', 'fax_number', 'shop_id'];

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
}
