<?php

namespace App\Http\Middleware;
use App\models\User;
use App\models\Role;
use Closure;
use Illuminate\Http\Request;

class CekAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        $user = User::where('id_role', $request->id_role)->first();
        if ($user == 2) {
            return redirect('/dashboard');
        }
        return $next($request);
    }
}
