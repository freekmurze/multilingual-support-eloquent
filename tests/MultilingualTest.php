<?php

use App\Article;
use App\ArticleTranslation;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class MultilingualTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * Test the localized model.
     */
    public function testLocales()
    {
        $locales = ['en', 'nl', 'fr', 'de'];

        $this->visit('/create')
            ->see('Article created');

        $this->assertCount(1, Article::all());
        $this->assertCount(count($locales), ArticleTranslation::all());

        foreach ($locales as $locale) {
            $this->visit("/{$locale}")
                ->see("Title {$locale}")
                ->see("Text {$locale}");
        }
    }
}
