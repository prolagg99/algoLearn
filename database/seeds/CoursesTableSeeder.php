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

        factory(App\course::class, 10)->create()->each(function($course) {

            factory(App\chapter::class, 10)->create([
                'course_id' => $course->id,
            ])->each(function($chapter) {

                factory(App\lesson::class, 6)->create([
                    'chapter_id' => $chapter->id, 
                    'course_id' => $chapter->course_id
                ]);

            });


        });
    }
}
