<?php

namespace App\Models;
use Eloquent;

class CategoryTranslation extends Eloquent {

    public $timestamps = false;
    protected $fillable = ['name'];

}
