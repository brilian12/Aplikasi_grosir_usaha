<?php
namespace App\Http\Controllers;
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

        if (auth()->user()->id_role == 2) {
            
            return $next($request);
        }
        return redirect('login')->with('message',"You don't have admin access");
    }
}
