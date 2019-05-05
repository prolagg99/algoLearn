<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/lessons', 'WebPages@viewLessonsPage');
// user routes --------------------------------------------------

Route::get('/', function () {
    Cookie::queue('lastpage2', '/', 3600);
    return view('home');
})->name('home');

Route::get('/contact/create', 'ContactController@create')->middleware('auth');
Route::post('/contact', 'ContactController@store');

Route::get('/chapitres', 'WebPages@viewLessonsPage');
Route::get('/cour/{lesson_id}', 'WebPages@viewLessonDetails')->middleware('auth');
Route::get('/cour/{lesson_id}/Quiz/Qsts', 'WebPages@viewQuizQsts');


Route::get('/login', function(){
    return view('web.login1');
});
Auth::routes();

Route::get('/inscription', function(){
    return view('web.inscription');
});

Route::get('/password/reset', function(){
    return view('auth.passwords.email');
});


// admin routes -------------------------------------------------
Route::prefix('admin')->middleware('isAdmin')->group(function () {
    Route::get('/welcome','ChapterController@index2');
    Route::get('/welcome/{lesson_id}/quiz/qsts','WebPages@viewQuizPage');
    Route::resource('/courses', 'CourseController');
    // chapters ----------------------------------------

    Route::get('/{course_id}/chapters','ChapterController@index');
    Route::get('/chapters/{id}','ChapterController@show');

    Route::get('/{course_id}/chapters/create/','ChapterController@create');
    Route::post('/{course_id}/chapters','ChapterController@store');


    Route::get('/chapters/{id}/edit','ChapterController@edit');
    Route::post('/chapters/{id}','ChapterController@update');

    Route::post('/chapters/{id}/delete','chapterController@destroy');

    // lessons ------------------------------------------
    Route::get('/{course_id}/{chapter_id}/lessons','LessonController@index');
    Route::get('/lessons/{id}','LessonController@show');

    Route::get('/{course_id}/{chapter_id}/lessons/create','LessonController@create');
    Route::post('/{course_id}/{chapter_id}/lessons','LessonController@store');

    Route::get('/lessons/{id}/edit','LessonController@edit');
    Route::post('/lessons/{id}','LessonController@update');

    Route::post('/lessons/{id}/delete','LessonController@destroy');

    // lessons questions ----------------------------------------------------

    Route::get('/{lesson_id}/questions','LessonQuestionController@index');

    Route::get('/{lesson_id}/questions/create','LessonQuestionController@create');
    Route::post('/{lesson_id}/questions','LessonQuestionController@store');

    Route::get('/questions/{id}/edit','LessonQuestionController@edit');
    Route::post('/questions/{id}','LessonQuestionController@update');

    Route::post('/questions/{id}/delete','LessonQuestionController@destroy');

    // chapters quiz ------------------------------------------------------

    Route::get('/{lesson_id}/quizzes','ChapterQuizController@index');
    Route::get('/quizzes/{id}','ChapterController@show');


    Route::get('/{lesson_id}/quizzes/create','ChapterQuizController@create');
    Route::post('/{lesson_id}/quizzes','ChapterQuizController@store');

    Route::get('/quizzes/{id}/edit','ChapterQuizController@edit');
    Route::post('/quizzes/{id}','ChapterQuizController@update');

    Route::post('/quizzes/{id}/delete','ChapterQuizController@destroy');

    // chapters quiz questions ---------------------------------------------


    Route::get('/{lesson_id}/{quiz_id}/qsts','ChapterQuizQuestionController@index');

    Route::get('/{lesson_id}/{quiz_id}/qsts/create','ChapterQuizQuestionController@create');
    Route::post('/{lesson_id}/{quiz_id}/qsts','ChapterQuizQuestionController@store');

    Route::get('/qsts/{id}/edit','ChapterQuizQuestionController@edit');
    Route::post('/qsts/{id}','ChapterQuizQuestionController@update');

    Route::post('/qsts/{id}/delete','ChapterQuizQuestionController@destroy');
});


Route::get('/home', 'HomeController@index')->name('home');
