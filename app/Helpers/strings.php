<?php
use Illuminate\Support\Str;

function generateToken()
{
    return hash('sha256', Str::random(config('settings.random_string_token')), false);
}
