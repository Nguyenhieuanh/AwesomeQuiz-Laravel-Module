<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataArray = [];
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 20; $i++) {
            array_push($dataArray, [
                'name' => $faker->name,
                'email' => $faker->domainWord . '@gmail.com',
                'password' => Hash::make('123'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
        DB::table('users')->insert($dataArray);
    }
}
