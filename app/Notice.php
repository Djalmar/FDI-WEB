<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $table = "news";

    protected $fillable=[
        'title',
        'body',
        'published',
        'expiration'
    ];
}
