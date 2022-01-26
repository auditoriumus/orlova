<?php

namespace Database\Seeders;

use Faker\Provider\Uuid;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersCourseSeeder extends Seeder
{
    private $whosAngry = [
        'negorovadid@mail.ru',
        'botina_sv@mail.ru',
        'oksnik-12@yandex.ru',
        'an.iksanova@yandex.ru',
        'Talia8@yandex.ru',
        'zinaida-vs@mail.ru',
        'zaytcevamarina@mail.ru',
        'vic.plekhanova@gmail.com',
        'vetoshkinalena@gmail.com',
        'yulia-krapivina@mail.ru',
        '76udacha@bk.ru',
        'julest@ya.ru',
        'vasilan85@mail.ru',
        'otabalykina@inbox.ru',
        'tribul@ya.ru',
        'Evgeniyaalex@rambler.ru'
    ];

    private $iAllow = [
        'Sv.17@mail.ru',
        'fialka440@yandex.ru',
        'timaridoll@gmail.com',
        'nad216@ya.ru',
        'Arut-oksana@yandex.ru',
        'anita_fler@mail.ru',
        'musina.es@mail.ru',
        'Myshasolnusa@mail.ru',
        'Mary5789@inbox.ru',
        'negorovadid@mail.ru',
        'asveta87@gmail.com',
        'kotya141097@mail.ru',
        'an.iksanova@yandex.ru',
        'tribul@ya.ru',
        'zaytcevamarina@mail.ru',
        'zinaida-vs@mail.ru',
        'galina-popova63@mail.ru',
        'saykina.margo@mail.ru',
        'vasilan85@mail.ru',
        'zemlyahaos@mail.ru',
        'zay4evskiy@mail.ru',
        'Nadezda_ivanova@list.ru',
        'm.sharogradskaya@mail.ru',
        'oymasalova@gmail.com',
        'Simona-msu@mail.ru',
        'elinika25@gmail.com',
        'Elenafb@mail.ru',
        'julest@ya.ru',
        '2877971@mail.ru',
        'andre-nat@mail.ru',
        'irinai322@gmail.com',
        'yuliya_piontkovs@mail.ru',
        'Lyalya1197@list.ru',
        'otabalykina@inbox.ru',
        'annaz79@mail.ru',
        'daadva.2011@yandex.ru',
        'madina.shamgunova@gmail.com',
        'natbaskaeva@mail.ru',
        'Valeri-3007@yandex.ru',
        'Anastasia.mamonova@yahoo.fr',
        'um_2005@mail.ru'
    ];

    public function run()
    {
        $data = [];

        $file = fopen(storage_path('users.csv'), 'r+');
        $i = 1;
        while (($row = fgetcsv($file, 0, ';')) !== false) {
            $data[] = [
                'uuid' => Uuid::uuid(),
                'user_id' => $i,
                'course_id' => 1,
            ];
            if (in_array($row[2], $this->iAllow)) {
                $data[] = [
                    'uuid' => Uuid::uuid(),
                    'user_id' => $i,
                    'course_id' => 2,
                ];
            }
            if ($row[2] == 'um_2005@mail.ru' || $row[2] == 'S9817179847@gmail.com' || $row[2] == 'Integrapsi10@gmail.com') {
                $data[] = [
                    'uuid' => Uuid::uuid(),
                    'user_id' => $i,
                    'course_id' => 3,
                ];
            }

            $i++;
        }

        DB::table('users_courses')->insert($data);
    }
}
