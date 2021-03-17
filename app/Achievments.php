<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Achievments extends Model
{
    // use SoftDeletes;
    protected $primaryKey = 'id_achiev';
    protected $fillable = ['title', 'description', 'image'];
}
