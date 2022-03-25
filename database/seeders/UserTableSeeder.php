<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Faker\Factory;

use DB;

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
        //
        DB::table('users')->insert([
            'name' => 'Hoàng An',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'),
            'status' => 1,
            'group_id' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        $faker = Factory::create();

        for ($i = 1; $i<100; $i++){
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->email,
                'password' => Hash::make('123456'),
                'status' => rand(0, 1),
                'group_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }


    }
}
