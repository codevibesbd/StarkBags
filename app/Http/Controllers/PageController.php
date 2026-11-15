<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class PageController extends Controller
{
    /**
     * Display the application home landing page.
     */
    public function home(): View
    {
        return view('welcome');
    }

    /**
     * Display the About page showcasing industrial heritage, capacity, and governance.
     */
    public function about(): View
    {
        return view('about');
    }
}
