<?php

use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\course;
use App\chapter;
use App\lesson;
use App\lesson_questions;
use App\chapter_quizzes;
use App\chapter_quiz_questions;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});


$factory->define(course::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'details' => $faker->paragraph
    ];
});


$factory->define(chapter::class, function (Faker $faker) {
    return [
        'course_id' => '',
        'title' => $faker->word
    ];
});

$factory->define(lesson::class, function (Faker $faker) {
    return [
        'course_id' => '',
        'chapter_id' => '',
        'title' => $faker->word,
        'details' => $faker->paragraph
    ];
});

$factory->define(lesson_questions::class, function (Faker $faker) {
    return [
        'lesson_id' => '',
        'question' => $faker->word,
        'type' => 'list',
        'options' => $faker->word,
        'right_answer' => $faker->word
    ];
});

$factory->define(chapter_quizzes::class, function (Faker $faker) {
    return [
        'chapter_id' => '',
        'title' => $faker->word
    ];
});

$factory->define(chapter_quiz_questions::class, function (Faker $faker) {
    return [
        'quiz_id' => '',
        'question' => $faker->word,
        'type' => 'list',
        'options' => $faker->word,
        'right_answer' => $faker->word
    ];
});



