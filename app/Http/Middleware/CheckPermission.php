<?php

namespace App\Http\Middleware;

use App\Models\Permission;
use Closure;
use Illuminate\Http\Request;

class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
public function handle(Request $request, Closure $next, $permission)
{
    //چرا؟؟؟؟؟؟؟؟؟؟؟
    $permission =Permission::query()->where('title',$permission)->first();
    if (!auth()->user()->role->hasPermission($permission)){
         abort(403);
    }
    return $next($request);
}
}
