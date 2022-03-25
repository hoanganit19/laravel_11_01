<?php

namespace Database\Seeders;

use Faker\Factory;

use Illuminate\Database\Seeder;

use Database\Seeders\GroupsTableSeeder;

use Database\Seeders\ProvinceTableSeeder;
use Database\Seeders\DistrictTableSeeder;

use Database\Seeders\WardTableSeeder;

use Database\Seeders\UserTableSeeder;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
//        $this->call(ProvinceTableSeeder::class);
//        $this->call(DistrictTableSeeder::class);
//        $this->call(WardTableSeeder::class);
        //$this->call(GroupsTableSeeder::class);
        //$this->call(UserTableSeeder::class);


        $dataInsert = [
            [
                'name' => 'Administrator',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            [
                'name' => 'Manager',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            [
                'name' => 'Staff',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];

        foreach ($dataInsert as $item){
            $groupId = DB::table('groups')->insertGetId($item);

            if (!empty($groupId)){
                $faker = Factory::create();

                //Kiểm tra xem có tồn tại email admin@gmail.com không?
                $adminUser = DB::table('users')->where('email', 'admin@gmail.com')->first();

                //Không tồn tại => insert user admin (Hỗ trợ phần đăng nhập)
                if (!$adminUser){
                    DB::table('users')->insert([
                        'name' => 'Hoàng An',
                        'email' => 'admin@gmail.com',
                        'password' => Hash::make('123456'),
                        'status' => 1,
                        'group_id' => $groupId,
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'),
                    ]);
                }

                //Insert thêm 10 users khác để test
                for ($i = 1; $i<=10; $i++){
                    DB::table('users')->insert([
                        'name' => $faker->name,
                        'email' => $faker->unique()->email,
                        'password' => Hash::make('123456'),
                        'status' => rand(0, 1),
                        'group_id' => $groupId,
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'),
                    ]);
                }
            }
        }


    }
}
