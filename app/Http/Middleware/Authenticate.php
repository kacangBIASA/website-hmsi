<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request)
    {
        if (! $request->expectsJson()) {
        if ($request->is('admin/*')) {
            return route('admin.login'); // ✅ Redirect ke admin login
        }

        return route('home.index'); // atau route umum jika tidak login
    }
    }
}
