<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    use HasFactory;

    protected $fillable = [
        'newstitle',
        'authorsname',
        'briefdescription',
        'newsarticle',
        'image_path'
    ];

    protected $hidden = [
        'authorsname',
        'briefdescription',
        'newsarticle',
        'image_path'
    ];

}
