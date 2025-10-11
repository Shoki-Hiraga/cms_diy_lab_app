<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TESTCommentsTableSeeder extends Seeder
{
    public function run(): void
    {
        $comments = [
            [
                'post_id' => 1,
                'user_id' => 2,
                'body' => 'とてもきれいに作れてますね！参考にします。',
            ],
            [
                'post_id' => 1,
                'user_id' => 3,
                'body' => '材料はどこで揃えましたか？',
            ],
            [
                'post_id' => 2,
                'user_id' => 1,
                'body' => 'キャンプに最適ですね！',
            ],
        ];

        foreach ($comments as $comment) {
            DB::table('comments')->insert(array_merge($comment, [
                'created_at' => now(),
                'updated_at' => now(),
            ]));
        }
    }
}
