<?php

namespace Database\Seeders;

use Faker\Provider\Uuid;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoSeeder extends Seeder
{
    public function run()
    {
        $data = [
//            [
//                'uuid' => 'c5bd1e1e-58e9-32e1-9b4a-7e6c9568476f',
//                'number' => 1,
//                'course_id' => 1,
//                'source' => 'https://www.youtube.com/embed/lyh2kAjcmSY'
//            ],
            [
                'uuid' => 'e4008fcd-0dba-3f6b-8327-cf790e24ddbc',
                'number' => 1,
                'course_id' => 1,
                'source' => 'https://www.youtube.com/embed/NN7aO62xMPM'
            ],
            [
                'uuid' => 'e4008fcd-0dba-3f6b-8327-cf790e24ddba',
                'number' => 1,
                'course_id' => 2,
                'source' => 'https://www.youtube.com/embed/Pvd5bCtmSMU'
            ]
        ];

        DB::table('videos')->insert($data);
    }
}
