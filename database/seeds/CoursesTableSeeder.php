<?php

use Illuminate\Database\Seeder;
use App\course;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     /*   factory(App\course::class, 10)->create()->each(function($course) {

            factory(App\chapter::class, 10)->create([
                'course_id' => $course->id,
            ])->each(function($chapter) {

                factory(App\lesson::class, 6)->create([
                    'chapter_id' => $chapter->id, 
                    'course_id' => $chapter->course_id
                ]) ->each(function($lesson){
                    factory(App\lesson_questions::class, 1)->create([
                        'lesson_id' => $lesson->id,
                    ]);
                });

                factory(App\chapter_quizzes::class, 1)->create([
                    'lesson_id' => $lesson->id, 
                ])->each(function($chapter_quizzes){
                    factory(App\chapter_quiz_questions::class, 1)->create([
                        'quiz_id' => $chapter_quizzes->id,
                    ]);
                });

            });
            
            
        });
    } */

    factory(App\course::class, 10)->create()->each(function($course) {

        factory(App\chapter::class, 10)->create([
            'course_id' => $course->id,
        ])->each(function($chapter) {
            factory(App\lesson::class, 6)->create([
                'chapter_id' => $chapter->id, 
                'course_id' => $chapter->course_id
            ]) ->each(function($lesson){
                factory(App\chapter_quizzes::class, 1)->create([
                    'lesson_id' => $lesson->id, 
                ])->each(function($chapter_quizzes){
                    factory(App\chapter_quiz_questions::class, 20)->create([
                        'quiz_id' => $chapter_quizzes->id,
                        'lesson_id' => $chapter_quizzes->lesson_id, 
                    ]);
                });
            });
        });   
    });
}
    
}