<?php

namespace App;

// app/Article.php
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['name', 'text'];

    protected $guarded = ['id'];
}
