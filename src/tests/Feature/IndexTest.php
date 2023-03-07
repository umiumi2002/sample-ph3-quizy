<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\BigQuestion;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class IndexTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use DatabaseMigrations;
    public function testExample()
    {
        // $response = $this->get('/');
        // $response->assertStatus(200);

        // $value = "東京の難読地名クイズ";
        // $response->assertSee($value);

        $big_question =factory(BigQuestion::class)->create();
        $response = $this->get('/');
        // ↑↑↑モデルの作成
        $response->assertSee($big_question->name);


    }
}
