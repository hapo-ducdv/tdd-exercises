<?php

namespace Tests\Unit;

use Tests\TestCase;

class ArticleMaxLengthTitleTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testMaxLengthTitleInArticle()
    {
        $data = [
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph
        ];

        if (strlen($data['title'] > 200)) {
            $this->post(route('articles.store'), $data)
                ->assertStatus(422);
        } else {
            $this->post(route('articles.store'), $data)
                ->assertStatus(201);
        }
    }
}
