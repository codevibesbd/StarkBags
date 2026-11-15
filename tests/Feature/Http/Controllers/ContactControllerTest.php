<?php

declare(strict_types=1);

namespace Tests\Feature\Http\Controllers;

use Tests\TestCase;

class ContactControllerTest extends TestCase
{
    /**
     * Test contact page loads successfully.
     */
    public function test_contact_page_returns_successful_response(): void
    {
        $response = $this->get(route('contact'));

        $response->assertOk();
        $response->assertViewIs('contact');
        $response->assertSee('Direct Procurement');
        $response->assertSee('info@starkbags.com');
        $response->assertSee('Uttara Commercial');
    }

    /**
     * Test successful procurement inquiry submission.
     */
    public function test_contact_form_submission_with_valid_data(): void
    {
        $payload = [
            'contact_name' => 'Alexander Vance',
            'company' => 'AeroFlight Travel Gear',
            'email' => 'alexander@aeroflight.example.com',
            'country' => 'Germany',
            'phone' => '+49 30 123456',
            'inquiry_type' => 'oem-luggage',
            'target_quantity' => '25k-100k',
            'specifications' => 'Bayer Polycarbonate 20-inch and 28-inch sets with recessed TSA locks.',
            'nda_requested' => '1',
        ];

        $response = $this->post(route('contact.submit'), $payload);

        $response->assertRedirect(route('contact'));
        $response->assertSessionHas('status');
    }

    /**
     * Test contact form validates required fields.
     */
    public function test_contact_form_submission_validates_required_fields(): void
    {
        $response = $this->post(route('contact.submit'), []);

        $response->assertSessionHasErrors(['contact_name', 'company', 'email', 'country']);
    }
}
