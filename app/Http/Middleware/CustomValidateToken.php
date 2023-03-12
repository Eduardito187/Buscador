<?php

namespace App\Http\Middleware;

use \Closure;
use \Illuminate\Http\Request;
use \Illuminate\Support\Facades\Log;
use App\Classes\TokenAccess;
use \Illuminate\Http\Response;
use \Illuminate\Http\RedirectResponse;

class CustomValidateToken
{
    public function __construct() {
        //
    }

    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param  Closure(Request): (Response|RedirectResponse)  $next
     * @return Response|RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->header("Authorization") != null) {
            $tokenAccess = new TokenAccess($request->header("Authorization"));
            if ($tokenAccess->validateAPI() == true) {
                Log::debug("Token ON => ".$request->header("Authorization"));
                return $next($request);
            }else{
                Log::debug("Rejected => ".$request->header("Authorization"));
                return abort(403, "Sin acceso.");
            }
        }else{
            return abort(500, "Rechazado.");
        }
    }
}
