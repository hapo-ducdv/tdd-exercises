<?php

namespace Tests\Unit;

use Tests\TestCase;

class ArticleApiUnitTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    /** @test */
    public function itCanCreateAnArticle()
    {
        $data = [
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph
        ];

        $this->post(route('articles.store'), $data)
            ->dump()
            ->assertStatus(201)
            ->assertJson($data);
    }
}
