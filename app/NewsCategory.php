<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    protected $fillable = ['name', 'description', 'image', 'parent', 'status', 'meta_description', 'meta_keyword'];
    
}
