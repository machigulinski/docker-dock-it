<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Carbon\Carbon;

class BotDetectionMiddleware {

    public function handle(Request $request, Closure $next) {

        $formLoadTime = $request->input('formLoadTime', 0);

        $formSubmitTime = Carbon::now()->timestamp;

        // Calculate time difference
        $timeDifference = $formSubmitTime - $formLoadTime;
        $threshold = 5;

        if ($timeDifference < $threshold) {
            return back()->withErrors(['formLoadTime' => 'Too fast for a human!' ]);
        }

        return $next($request);
    }
}
