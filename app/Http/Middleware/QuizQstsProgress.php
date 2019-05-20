<?php

namespace App\Http\Middleware;

use Closure;
use App\user_lessons_progress;
use App\lesson;
class QuizQstsProgress
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
        
        $prevID = lesson::where('id', '<', $request->lesson_id)->max('id');
        $progress = user_lessons_progress::where('lesson_id',$prevID);
        $progress = $progress->where('user_id',\Auth::user()->id)->first();
        
        if ( $progress == null || $progress['is_done'] == 0 ) {
            if($prevID != null){
                return redirect('/cour/'.$request->lesson_id);
            }else{
            return $next($request);       
            } 
        }
    }
}
