<?php

declare(strict_types=1);

return [

    /*
    |--------------------------------------------------------------------------
    | Boost Master Switch
    |--------------------------------------------------------------------------
    |
    | Only enable Boost in local development environments. In production,
    | testing, or staging, Boost is strictly disabled to prevent exposure of
    | development endpoints, browser logging, and debugging features.
    |
    */

    'enabled' => env('APP_ENV') === 'local' && (bool) env('BOOST_ENABLED', true),

    /*
    |--------------------------------------------------------------------------
    | Boost Browser Logs Watcher
    |--------------------------------------------------------------------------
    |
    | The log watcher should only run in local environments.
    |
    */

    'browser_logs_watcher' => env('APP_ENV') === 'local' && (bool) env('BOOST_BROWSER_LOGS_WATCHER', true),

];

