<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\RefreshToken;

class User extends Authenticatable
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'profile_photo', 'registering_way', 'gender', 'role', 'facebook_id',
        'facebook_name', 'facebook_page', 'facebook_token', 'google_id', 'google_token', 'google_page', 'ip_address',
        'country_code'
    ];

    protected $dates = ['deleted_at'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    public function permisons()
    {
        return $this->belongsToMany(Permison::class);
    }

    public function refreshToken()
    {
        return $this->hasOne(RefreshToken::class);
    }

    public function shops()
    {
        return $this->hasMany(Shop::class);
    }
}
