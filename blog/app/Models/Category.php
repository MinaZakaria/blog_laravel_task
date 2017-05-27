<?php

namespace App\Models;
use Eloquent;

class Category extends Eloquent {

    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['name'];
    protected $fillable = ['slug'];

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    // (optionaly)
    // protected $with = ['translations'];

}
