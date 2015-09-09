<?php

namespace app;

// app/ArticleTranslation.php
use Illuminate\Database\Eloquent\Model;

class ArticleTranslation extends Model
{
    public $timestamps = false;

    protected $guarded = ['id'];
}
