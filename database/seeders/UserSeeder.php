<?php

namespace Database\Seeders;

use Faker\Provider\Uuid;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserSeeder extends Seeder
{
    public function run()
    {
        $emails = [];

        $data = [];

        $file = fopen(storage_path('users.csv'), 'r+');
        while (($row = fgetcsv($file, 0, ';')) !== false) {
            $emails[] = $row[2];
            if (in_array($row[0], $emails)) {
                continue;
            }
            $data[] = [
                'uuid' => Uuid::uuid(),
                'name' => $row[0],
                'phone' => $row[1],
                'email' => $row[2],
                'password' => Hash::make($row[2]),
                'privacy_policy' => true,
                'public_offer' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        //DB::table('users')->insert($data);

        $file = fopen(storage_path('user_list.csv'), 'r+');
        while (($row = fgetcsv($file)) !== false) {
            $emails[] = $row[0];
            if (in_array($row[0], $emails)) {
                continue;
            }
            $data[] = [
                'uuid' => Uuid::uuid(),
                'name' => $row[0],
                'phone' => '1',
                'email' => $row[0],
                'password' => Hash::make($row[0]),
                'privacy_policy' => true,
                'public_offer' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('users')->insert($data);
    }
}
