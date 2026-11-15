<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    /**
     * Display the Contact and Factory Audit page.
     */
    public function show(): View
    {
        return view('contact');
    }

    /**
     * Handle incoming procurement inquiry or factory audit request.
     */
    public function submit(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'contact_name' => ['required', 'string', 'max:255'],
            'company' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'inquiry_type' => ['nullable', 'string', 'max:100'],
            'target_quantity' => ['nullable', 'string', 'max:100'],
            'specifications' => ['nullable', 'string', 'max:5000'],
            'nda_requested' => ['nullable', 'boolean'],
        ]);

        Log::info('New B2B Procurement Inquiry received', [
            'contact_name' => $validated['contact_name'],
            'company' => $validated['company'],
            'email' => $validated['email'],
            'country' => $validated['country'],
            'inquiry_type' => $validated['inquiry_type'] ?? 'General',
            'target_quantity' => $validated['target_quantity'] ?? 'Unspecified',
            'nda_requested' => $request->boolean('nda_requested'),
        ]);

        return redirect()
            ->route('contact')
            ->with('status', 'Thank you! Your inquiry has been dispatched to our Dhaka export merchandising desk. An account director will review your technical specifications and respond within 24 business hours.');
    }
}
