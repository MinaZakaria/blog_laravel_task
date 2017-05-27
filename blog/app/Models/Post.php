<?php

namespace App\Models;

class Post extends Eloquent {

    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['title','description'];
    protected $fillable = ['category_id','image'];

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    // (optionaly)
    // protected $with = ['translations'];

}
