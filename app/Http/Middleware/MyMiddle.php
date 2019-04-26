<?php

namespace App\Http\Middleware;

use Closure;

class MyMiddle
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->){
            return redirect('/admin/1/{{ $lesson->chapter_id }}/lessons');
        }else{
            return redirect('/admin/lessons/{{ $lesson->id }}');
        }
        return $next($request);
    }
}
