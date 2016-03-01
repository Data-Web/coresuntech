<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class RefreshToken extends Model
{
    static $id = 'refresh_tokens.id';
    static $content = 'refresh_tokens.content';
    static $userId = 'refresh_tokens.user_id';
    static $deviceId = 'refresh_tokens.device_id';
    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    
    protected $table = 'refresh_tokens';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['content', 'user_id', 'device_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
