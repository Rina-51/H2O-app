<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 例として、グループに関連する投稿を作成
        $group = Group::first(); // 最初のグループを取得

        if ($group) {
            Post::create([
                'user_id' => 11, // テストユーザーのID
                'group_id' => $group->id,
                'content' => 'This is a sample post.',
            ]);
        }
    }
}
