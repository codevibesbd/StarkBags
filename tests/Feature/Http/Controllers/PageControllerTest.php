<?php

declare(strict_types=1);

namespace Tests\Feature\Http\Controllers;

use Tests\TestCase;

class PageControllerTest extends TestCase
{
    /**
     * Test home landing page loads successfully.
     */
    public function test_home_page_returns_successful_response(): void
    {
        $response = $this->get(route('home'));

        $response->assertOk();
        $response->assertViewIs('welcome');
        $response->assertSee('Stark Bag Industries');
    }

    /**
     * Test about page loads successfully with industrial atelier details.
     */
    public function test_about_page_returns_successful_response(): void
    {
        $response = $this->get(route('about'));

        $response->assertOk();
        $response->assertViewIs('about');
        $response->assertSee('Industrial Heritage');
        $response->assertSee('Mohammad Taherul Islam');
        $response->assertSee('Rider Leather Bags &amp; Luggage Factory Ltd.', false);
    }
}
