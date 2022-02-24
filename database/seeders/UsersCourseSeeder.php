<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Faker\Provider\Uuid;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            ->whereIn('email', $this->usersCourses)
            ->get();

        $data = [];
        foreach ($d as $item) {
            $data[] = [
                'uuid' => Uuid::uuid(),
                'user_id' => $item->id,
                'course_id' => 2,
                'created_at' => Carbon::create('2021', 12, 13),
                'options' => json_encode(['append_days' => 69])
            ];
        }
        DB::table('users_courses')->insert($data);


        $d = DB::table('users')
            ->select('id')
            ->get();

        $data = [];
        foreach ($d as $item) {
            if ($item->id == 26) {
                $data[] = [
                    'uuid' => Uuid::uuid(),
                    'user_id' => $item->id,
                    'course_id' => 2,
                    'created_at' => now(),
                ];
                $data[] = [
                    'uuid' => Uuid::uuid(),
                    'user_id' => $item->id,
                    'course_id' => 3,
                    'created_at' => now(),
                ];
                $data[] = [
                    'uuid' => Uuid::uuid(),
                    'user_id' => $item->id,
                    'course_id' => 4,
                    'created_at' => now(),
                ];
            }
            $data[] = [
                'uuid' => Uuid::uuid(),
                'user_id' => $item->id,
                'course_id' => 1,
                'created_at' => now(),
            ];
        }
        DB::table('users_courses')->insert($data);


        $data = [
            [
                'uuid' => Uuid::uuid(),
                'user_id' => User::where('email', 'zemlyahaos@mail.ru')->first()->id,
                'course_id' => 3,
                'created_at' => Carbon::create('2022', '02', '22', '15','11')
            ],
            [
                'uuid' => Uuid::uuid(),
                'user_id' => User::where('email', 'sv.17@mail.ru')->first()->id,
                'course_id' => 4,
                'created_at' => Carbon::create('2022', '02', '09', '06','24')
            ],
            [
                'uuid' => Uuid::uuid(),
                'user_id' => User::where('email', 'vasilan85@mail.ru')->first()->id,
                'course_id' => 3,
                'created_at' => Carbon::create('2022', '02', '08', '21','13')
            ],
            [
                'uuid' => Uuid::uuid(),
                'user_id' => User::where('email', 'zubikm@rambler.ru')->first()->id,
                'course_id' => 1,
                'created_at' => Carbon::create('2022', '02', '08', '19','58')
            ],
            [
                'uuid' => Uuid::uuid(),
                'user_id' => User::where('email', 'ageevarimma@mail.ru')->first()->id,
                'course_id' => 3,
                'created_at' => Carbon::create('2022', '02', '03', '22','28')
            ],
            [
                'uuid' => Uuid::uuid(),
                'user_id' => User::where('email', 'sandrixpost@mail.ru')->first()->id,
                'course_id' => 3,
                'created_at' => Carbon::create('2022', '02', '01', '11','29')
            ],
            [
                'uuid' => Uuid::uuid(),
                'user_id' => User::where('email', 'marinakotova80@mail.ru')->first()->id,
                'course_id' => 3,
                'created_at' => Carbon::create('2022', '02', '01', '09','25')
            ],
            [
                'uuid' => Uuid::uuid(),
                'user_id' => User::where('email', 'an-sh@mail.ru')->first()->id,
                'course_id' => 4,
                'created_at' => Carbon::create('2022', '01', '30', '20','00')
            ],
            [
                'uuid' => Uuid::uuid(),
                'user_id' => User::where('email', 's9817179847@gmail.com')->first()->id,
                'course_id' => 4,
                'created_at' => Carbon::create('2022', '01', '28', '20','25')
            ],
        ];

        DB::table('users_courses')->insert($data);

    }
}
