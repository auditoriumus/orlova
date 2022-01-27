<?php

namespace Database\Seeders;

use Faker\Provider\Uuid;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class VideoSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                //лекция
                'uuid' => Str::uuid(),
                'description' => '',
                'number' => 1,
                'course_id' => 1,
                'part' => 1,
                'source' => 'https://www.youtube.com/embed/Pvd5bCtmSMU'
            ],
            [
                //Практика красивых женщин
                'uuid' => Str::uuid(),
                'description' => '',
                'number' => 1,
                'course_id' => 3,
                'part' => 1,
                'source' => '/assets/img/courses/3-praktika-krasivyh-zhenshchin/video/praktika-krasivyh-zhenshchin.mp4'
            ],
            [
                //я разрешаю себе удовольствие
                'uuid' => Str::uuid(),
                'description' => '',
                'number' => 1,
                'course_id' => 2,
                'part' => 1,
                'source' => '/assets/img/courses/2-ya-razreshayu-sebe-udovolstvie-i-naslazhdenie/video/ya-razreshayu-sebe-udovolstvie-i-naslazhdenie.mp4'
            ],
            [
                //марафон про тело
                'uuid' => Str::uuid(),
                'description' => 'Марафон про тело. 0 день. Предзадание',
                'number' => 1,
                'course_id' => 4,
                'part' => 1,
                'source' => 'https://www.youtube.com/embed/CF1BZbmLER8'
            ],
            [
                //марафон про тело
                'uuid' => Str::uuid(),
                'description' => 'Марафон про тело. 1 день. Введение',
                'number' => 2,
                'course_id' => 4,
                'part' => 1,
                'source' => 'https://www.youtube.com/embed/9Y__QGLnwt4'
            ],
            [
                //марафон про тело
                'uuid' => Str::uuid(),
                'description' => 'Марафон про тело. 1 день. Медитация',
                'number' => 3,
                'course_id' => 4,
                'part' => 1,
                'source' => 'https://www.youtube.com/embed/9Y__QGLnwt4'
            ],
            [
                //марафон про тело
                'uuid' => Str::uuid(),
                'description' => 'Марафон про тело. 2 день. Теория',
                'number' => 4,
                'course_id' => 4,
                'part' => 2,
                'source' => 'https://www.youtube.com/embed/lQZeTDBVbXk'
            ],
            [
                //марафон про тело
                'uuid' => Str::uuid(),
                'description' => 'Марафон про тело. 2 день. Практика',
                'number' => 5,
                'course_id' => 4,
                'part' => 2,
                'source' => 'https://www.youtube.com/embed/Kg8IcDJuLyE'
            ],
            [
                //марафон про тело
                'uuid' => Str::uuid(),
                'description' => 'Марафон про тело. 2 день. Медитация',
                'number' => 6,
                'course_id' => 4,
                'part' => 2,
                'source' => 'https://www.youtube.com/embed/Fbo9Nabk7A4'
            ],
            [
                //марафон про тело
                'uuid' => Str::uuid(),
                'description' => 'Марафон про тело. 2 день. Дополнение',
                'number' => 7,
                'course_id' => 4,
                'part' => 2,
                'source' => 'https://www.youtube.com/embed/F2w_cUWyAT0'
            ],[
                //марафон про тело
                'uuid' => Str::uuid(),
                'description' => 'Марафон про тело. 3 день. Теория',
                'number' => 8,
                'course_id' => 4,
                'part' => 3,
                'source' => 'https://www.youtube.com/embed/crg-zEUPCnE'
            ],
            [
                //марафон про тело
                'uuid' => Str::uuid(),
                'description' => 'Марафон про тело. 3 день. Медитация',
                'number' => 9,
                'course_id' => 4,
                'part' => 3,
                'source' => 'https://www.youtube.com/embed/19QlnJ-jmW4'
            ],
            [
                //марафон про тело
                'uuid' => Str::uuid(),
                'description' => 'Марафон про тело. 3 день. Практика',
                'number' => 10,
                'course_id' => 4,
                'part' => 3,
                'source' => 'https://www.youtube.com/embed/J2CLscwnvxA'
            ],
            [
                //марафон про тело
                'uuid' => Str::uuid(),
                'description' => 'Марафон про тело. 4 день. Теория',
                'number' => 11,
                'course_id' => 4,
                'part' => 4,
                'source' => 'https://www.youtube.com/embed/KyYiuvLvFjc'
            ],
            [
                //марафон про тело
                'uuid' => Str::uuid(),
                'description' => 'Марафон про тело. 4 день. Практика',
                'number' => 12,
                'course_id' => 4,
                'part' => 4,
                'source' => 'https://www.youtube.com/embed/tK8DzVsJP5E'
            ],[
                //марафон про тело
                'uuid' => Str::uuid(),
                'description' => 'Марафон про тело. 5 день. Теория',
                'number' => 13,
                'course_id' => 4,
                'part' => 5,
                'source' => 'https://www.youtube.com/embed/b2GzvpvhZZg'
            ],
            [
                //марафон про тело
                'uuid' => Str::uuid(),
                'description' => 'Марафон про тело. 5 день. Описание медитации',
                'number' => 14,
                'course_id' => 4,
                'part' => 5,
                'source' => 'https://www.youtube.com/embed/k1G41Myx3Jk'
            ],
            [
                //марафон про тело
                'uuid' => Str::uuid(),
                'description' => 'Марафон про тело. 5 день. Медитация',
                'number' => 15,
                'course_id' => 4,
                'part' => 5,
                'source' => 'https://www.youtube.com/embed/alIkwgp-DbY'
            ],
            [
                //марафон про тело
                'uuid' => Str::uuid(),
                'description' => 'Марафон про тело. 6 день. Теория',
                'number' => 16,
                'course_id' => 4,
                'part' => 6,
                'source' => 'https://www.youtube.com/embed/vFuSJ9KnibU'
            ],
            [
                //марафон про тело
                'uuid' => Str::uuid(),
                'description' => 'Марафон про тело. 6 день. Описание медитации',
                'number' => 17,
                'course_id' => 4,
                'part' => 6,
                'source' => 'https://www.youtube.com/embed/8G9dB01aNO8'
            ],
            [
                //марафон про тело
                'uuid' => Str::uuid(),
                'description' => 'Марафон про тело. 6 день. Медитация',
                'number' => 18,
                'course_id' => 4,
                'part' => 6,
                'source' => 'https://www.youtube.com/embed/J0-x7AMwaWQ'
            ],
            [
                //марафон про тело
                'uuid' => Str::uuid(),
                'description' => 'Марафон про тело. 7 день. Теория',
                'number' => 19,
                'course_id' => 4,
                'part' => 7,
                'source' => 'https://www.youtube.com/embed/3mhGbtEC41k'
            ],
            [
                //марафон про тело
                'uuid' => Str::uuid(),
                'description' => 'Марафон про тело. 7 день. Описание медитации',
                'number' => 20,
                'course_id' => 4,
                'part' => 7,
                'source' => 'https://www.youtube.com/embed/msvooVXrDeA'
            ],
            [
                //марафон про тело
                'uuid' => Str::uuid(),
                'description' => 'Марафон про тело. 7 день. Медитация',
                'number' => 21,
                'course_id' => 4,
                'part' => 7,
                'source' => 'https://www.youtube.com/embed/uBDy_OaA9zU'
            ],
            [
                //марафон про тело
                'uuid' => Str::uuid(),
                'description' => 'Марафон про тело. Финал. Празднование',
                'number' => 22,
                'course_id' => 4,
                'part' => 7,
                'source' => 'https://www.youtube.com/embed/SL4mfp6pc_8'
            ],
        ];

        DB::table('videos')->insert($data);
    }
}
