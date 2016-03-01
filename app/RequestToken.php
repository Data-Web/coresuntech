<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class RequestToken extends Model
{
    const ID = 'request_tokens.id';
    const CONTENT = 'request_tokens.content';
    const USER_ID = 'request_tokens.user_id';
    const DEVICE_ID = 'request_tokens.device_id';
    const EXPIRES_AT = 'request_tokens.expires_at';
    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    
    protected $table = 'request_tokens';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['content', 'user_id', 'device_id', 'expires_at'];


    public function scopeSearchToken($query, $token, $deviceId)
    {
        return $query->where(self::CONTENT, $token)
            ->where(self::DEVICE_ID, $deviceId)
            ->where(self::EXPIRES_AT, '>=', Carbon::now()->toDateTimeString());
    }
}
