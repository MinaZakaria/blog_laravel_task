<?php

namespace App\Models;
use Eloquent;

class PostTranslation extends Eloquent {

    public $timestamps = false;
    protected $fillable = ['title','description'];

}
