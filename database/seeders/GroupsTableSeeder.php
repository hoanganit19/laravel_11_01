<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $dataInsert = [
            'name' => 'Administrator',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        DB::table('groups')->insert($dataInsert);
    }
}
