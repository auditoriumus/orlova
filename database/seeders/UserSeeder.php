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

        $data = [];

        $file = fopen(storage_path('users.csv'), 'r+');
        while (($row = fgetcsv($file, 0, ';')) !== false) {
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
        DB::table('users')->insert($data);
    }
}
