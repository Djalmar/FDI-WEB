<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string image_path
 */
class Picture extends Model
{
    protected $table="images";

    protected $fillable=[
        'name',
        'description',
        'image_path'
    ];
}
