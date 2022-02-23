<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Faker\Provider\Uuid;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class UsersCourseSeeder extends Seeder
{

    private $usersCourses = [
        'mashenskova82@gmail.com',
        'vetoshkinalena@gmail.com',
        'zaytcevamarina@mail.ru',
        'vic.plekhanova@gmail.com',
        'zinaida-vs@mail.ru',
        'an.iksanova@yandex.ru',
        'Talia8@yandex.ru',
        'luda41172@yandex.ru',
        'oksnik-12@yandex.ru',
        'botina_sv@mail.ru',
        'gundyreva.en@inbox.ru',
        'negorovadid@mail.ru',
        'Agabitova20@mail.ru',
        'vasilan85@mail.ru',
        'otabalykina@inbox.ru',
        '76ufacha@bk.ru',
        'tribul@ya.ru',
        'yulia-krapivina@mail.ru',
        'Evgeniyaalex@rambler.ru',
        'Julest@ya.ru',
    ];


    private $da = [
        'zaytcevamarina@mail.ru',
        'zinaida-vs@mail.ru',
        'an.iksanova@yandex.ru',
        'negorovadid@mail.ru',
        'vasilan85@mail.ru',
        'otabalykina@inbox.ru',
        'tribul@ya.ru'
    ];

    public function run()
    {
        $d = DB::table('users')
            ->select('id')
            ->whereIn('email', array_diff($this->usersCourses, $this->da))
            ->get();

        $data = [];
        foreach ($d as $item) {
            $data[] = [
                'uuid' => Uuid::uuid(),
                'user_id' => $item->id,
                'course_id' => 2,
                'created_at' => Carbon::create('2021', 12,13),
                'options' => json_encode(['append_days' => 69])
            ];
        }
        DB::table('users_courses')->insert($data);


        $d = DB::table('users')
            ->select('id')
            ->get();

        $data = [];
        foreach ($d as $item) {
            $data[] = [
                'uuid' => Uuid::uuid(),
                'user_id' => $item->id,
                'course_id' => 1,
                'created_at' => now(),
            ];
        }
        DB::table('users_courses')->insert($data);
    }
}
