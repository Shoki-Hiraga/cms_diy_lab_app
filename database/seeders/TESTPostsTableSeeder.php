<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TESTPostsTableSeeder extends Seeder
{
    public function run(): void
    {
        // --- 投稿データ ---
        $posts = [
            [
                'id' => 1,
                'user_id' => 1,
                'title' => '初めてのDIYテーブル',
                'difficulty_id' => 3,
                'status' => 'published',
                'view_count' => 120,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'user_id' => 2,
                'title' => 'キャンプ用ラック',
                'difficulty_id' => 2,
                'status' => 'published',
                'view_count' => 85,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('posts')->insert($posts);

        // --- 投稿内容データ（post_contents） ---
        DB::table('post_contents')->insert([
            [
                'post_id' => 1,
                'image_path' => 'sample/table1.jpg',
                'comment' => '木材を使ってシンプルなテーブルを作りました！',
                'order' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => 2,
                'image_path' => 'sample/rack1.jpg',
                'comment' => '100均素材を組み合わせて作ったキャンプラック。',
                'order' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // --- カテゴリ・ツール・タグの紐付け ---
        DB::table('post_categories')->insert([
            [
                'post_id' => 1,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => 2,
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        DB::table('post_tools')->insert([
            [
                'post_id' => 1,
                'tool_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => 2,
                'tool_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        DB::table('post_tags')->insert([
            [
                'post_id' => 1,
                'tag_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => 2,
                'tag_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
