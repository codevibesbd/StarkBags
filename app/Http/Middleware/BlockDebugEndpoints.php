<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BlockDebugEndpoints
{
    /**
     * Development and debug route patterns that must never be exposed outside local development.
     *
     * @var array<int, string>
     */
    protected array $debugPatterns = [
        '_boost*',
        '_ignition*',
        '_debugbar*',
        'telescope*',
        'horizon*',
    ];

    /**
     * Handle an incoming request.
     *
     * Enforces server-side verification that debug and development endpoints
     * are strictly rejected with 404 outside local development environments.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        foreach ($this->debugPatterns as $pattern) {
            if ($request->is($pattern)) {
                if (! app()->isLocal() || config('app.debug') !== true) {
                    abort(404);
                }
            }
        }

        return $next($request);
    }
}
