<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // グループを作成
        $group = Group::create(['name' => 'Sample Group', 'created_by' => 11]);
        
        // ユーザーをグループに追加
        $group->users()->attach(11);
    }
}
