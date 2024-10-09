<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class UserGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_groups')->insert([
            'user_id' => 1,
            'group_id' => 2,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('user_groups')->insert([
            'user_id' => 1,
            'group_id' => 3,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

    }
}
