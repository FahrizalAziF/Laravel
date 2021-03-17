<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    protected $fillable = ['title', 'url', 'image', 'description'];
}
