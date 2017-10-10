<?php
/**
 * Created by PhpStorm.
 * User: saeed
 * Date: 10/10/17
 * Time: 08:23 م
 */

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Services\Roles;

class CheckIfAdmin
{

    public function handle($request, Closure $next,$guard = null)
    {

        $user = Auth::user();
        if($user->type == Roles::$admin) {
            return $next($request);
        }
        else{
            return redirect('errors/401');
        }


    }
}