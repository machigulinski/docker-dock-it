<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class HoneyPotMiddleware {

    public function handle(Request $request, Closure $next) {

        // Check the honeypot field
        if (!empty($request->input('subject'))) {

            // Honeypot field is filled out, likely a bot
            return back()->withErrors(['subject' => 'Bot detected!' ]);
        }

        // Honeypot field is empty, proceed with request
        return $next($request);
    }
}
