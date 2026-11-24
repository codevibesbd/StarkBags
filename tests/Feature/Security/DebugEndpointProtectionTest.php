<?php

declare(strict_types=1);

namespace Tests\Feature\Security;

use Illuminate\Support\Facades\Route;
use Tests\TestCase;

class DebugEndpointProtectionTest extends TestCase
{
    /**
     * Test that development debug routes are rejected with 404 in a production environment.
     */
    public function test_debug_endpoints_are_rejected_with_404_in_production_environment(): void
    {
        config([
            'app.env' => 'production',
            'app.debug' => false,
        ]);

        $responsePost = $this->post('/_boost/browser-logs');
        $responsePost->assertNotFound();

        $responseGet = $this->get('/_boost/browser-logs');
        $responseGet->assertNotFound();
    }

    /**
     * Test that debug endpoints are rejected when debug mode is disabled even if environment is local.
     */
    public function test_debug_endpoints_are_rejected_when_debug_mode_is_disabled(): void
    {
        config([
            'app.env' => 'local',
            'app.debug' => false,
        ]);

        $response = $this->post('/_boost/browser-logs');
        $response->assertNotFound();
    }

    /**
     * Test that common debug and administrative route patterns are rejected in production.
     */
    public function test_development_path_patterns_are_rejected_outside_local_environment(): void
    {
        config([
            'app.env' => 'production',
            'app.debug' => false,
        ]);

        $this->get('/_ignition/health-check')->assertNotFound();
        $this->get('/_debugbar/open')->assertNotFound();
        $this->get('/telescope/requests')->assertNotFound();
        $this->get('/horizon/api/stats')->assertNotFound();
    }

    /**
     * Test that legitimate public routes remain completely functional in production with debug disabled.
     */
    public function test_public_production_routes_remain_fully_accessible(): void
    {
        config([
            'app.env' => 'production',
            'app.debug' => false,
        ]);

        $this->get(route('home'))->assertOk();
        $this->get(route('about'))->assertOk();
        $this->get(route('contact'))->assertOk();
    }

    /**
     * Test that server-side 500 error responses in production do not leak debug traces or system paths.
     */
    public function test_production_exceptions_do_not_expose_debug_stack_traces(): void
    {
        config([
            'app.env' => 'production',
            'app.debug' => false,
        ]);

        Route::get('/test-production-failure', function () {
            throw new \RuntimeException('Internal database connection secret error: root_pass_123');
        });

        $response = $this->getJson('/test-production-failure');

        $response->assertStatus(500);
        $response->assertJson([
            'message' => 'Server Error',
        ]);
        $response->assertDontSee('root_pass_123');
        $response->assertDontSee('RuntimeException');
        $response->assertDontSee('.php');
    }
}

