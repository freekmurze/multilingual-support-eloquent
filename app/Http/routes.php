<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Article;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create', function() {
    $article = new Article();
    $article->online = true;
    $article->save();

    foreach (['en', 'nl', 'fr', 'de'] as $locale) {
	    $article->translateOrNew($locale)->name = "Title {$locale}";
	    $article->translateOrNew($locale)->text = "Text {$locale}";
    }

    $article->save();

    return 'article created';
});

get('{locale}/article', function($locale) {
    app()->setLocale($locale);

    $article = Article::first();

    return view('article')->with(compact('article'));
});
