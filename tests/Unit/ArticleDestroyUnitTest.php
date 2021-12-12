<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Article;

class ArticleDestroyUnitTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testItCanDestroyAnArticle()
    {
        $article = Article::where('title', 'duc1')->first();

        if (!$article) {
            $this->assertTrue(false, 'Not Found');
        } else {
            $this->delete(route('articles.destroy', $article))
                ->assertOk();
        }
    }
}
