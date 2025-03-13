<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        // dd(collect()->range(1, 10));
        Course::truncate();
        collect()->range(1, 6)->each(function (int $i) {
            Course::create([
                'title' => 'Course '.$i,
                'description' => 'Course description',
                'lessons_count'=> 1,
                'length'=> '1h 15m',
            ]);
        });        
    }
}
