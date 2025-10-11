<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TESTPostsTableSeeder extends Seeder
{
    public function run(): void
    {
        $posts = [
            [
                'user_id' => 1,
                'title' => '初めてのDIYテーブル',
                'body' => '木材を使ってシンプルなテーブルを作りました！',
                'difficulty_id' => 3,
                'status' => 'published',
                'view_count' => 120,
            ],
            [
                'user_id' => 2,
                'title' => 'キャンプ用ラック',
                'body' => '100均素材を組み合わせて作ったキャンプラック。',
                'difficulty_id' => 2,
                'status' => 'published',
                'view_count' => 85,
            ],
        ];

        foreach ($posts as $post) {
            DB::table('posts')->insert(array_merge($post, [
                'created_at' => now(),
                'updated_at' => now(),
            ]));
        }

        // サンプルでカテゴリ・ツール・タグを紐付け
        DB::table('post_categories')->insert([
            'post_id' => 1,
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('post_tools')->insert([
            'post_id' => 1,
            'tool_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('post_tags')->insert([
            'post_id' => 1,
            'tag_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
