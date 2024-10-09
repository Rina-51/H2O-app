<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('types')->insert([
            'name' => "出席確認",
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('types')->insert([
            'name' => "進捗管理",
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('types')->insert([
            'name' => "振り動画",
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('types')->insert([
            'name' => "その他",
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

    }
}
