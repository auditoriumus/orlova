<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(VideoSeeder::class);
        $this->call(UsersCourseSeeder::class);
//        $this->call(CommentSeeder::class);
    }
}
