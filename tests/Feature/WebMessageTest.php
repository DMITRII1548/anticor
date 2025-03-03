<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WebMessageTest extends TestCase
{
    use RefreshDatabase;

    public function test_showing_create_message_page_is_ok(): void
    {
        $this->withExceptionHandling();

        $response = $this->get('/messages/create');

        $response->assertOk()
            ->assertViewIs('message.create');
    }

    public function test_the_content_attribute_is_required_for_storing_a_message(): void
    {
        $response = $this->post('/messages', []);

        $response->assertRedirect();
    }

    public function test_the_content_attribute_is_string_for_storing_a_message(): void
    {
        $response = $this->post('/messages', [
            'content' => 1111,
        ]);

        $response->assertRedirect();
    }

    public function test_the_content_attribute_is_max_10000_symbols_for_storing_a_message(): void
    {
        $response = $this->post('/messages', [
            'content' => str_repeat('a', 10001),
        ]);

        $response->assertRedirect();
    }

    public function test_storing_a_message_is_ok(): void
    {
        $this->withExceptionHandling();

        $data = [
            'content' => fake()->text(),
        ];

        $response = $this->post('/messages', $data);

        // $this->assertDatabaseHas('messages', $data);

        $response->assertRedirectToRoute('messages.thanks');
    }

    public function test_showing_thanks_for_message_page_is_ok(): void
    {
        $this->withExceptionHandling();

        $response = $this->get('/messages/thanks');

        $response->assertOk()
            ->assertViewIs('message.thanks');
    }
}
