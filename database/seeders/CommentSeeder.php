<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'author' => 'Лиля Дмитриева',
                'comment' => 'Прекрасные курсы, супер профессионал, все очень доходчиво и понятно'
            ],
            [
                'author' => 'Анна Ильина',
                'comment' => 'Спасибо, Юлия! Очень помог курс, отличная практика, все прошло прекрасно и на одном дыхании.'
            ],
        ];

        DB::table('comments')->insert($data);
    }
}
