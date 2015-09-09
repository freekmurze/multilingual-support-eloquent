<?php

namespace App;

// app/ArticleTranslation.php
use Illuminate\Database\Eloquent\Model;

class ArticleTranslation extends Model
{
    public $timestamps = false;

    protected $guarded = ['id'];
}
