<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
use App\Models\Group;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PostGroup>
 */
class PostGroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // ユニークなpost_idとgroup_idのペアを生成するために一度リストを作成
        static $existingPairs = [];
        do {
            $post_id = Post::inRandomOrder()->first()->id;
            $group_id = Group::inRandomOrder()->first()->id;
            $pair = "{$post_id}-{$group_id}";
        } while (in_array($pair, $existingPairs)); // すでに存在するペアでないか確認
        // ペアをリストに追加
            $existingPairs[] = $pair;
        return [ 
            'post_id' => $post_id, 
            'group_id' => $group_id, 
        ];
    }
}
