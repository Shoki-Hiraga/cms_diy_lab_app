<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TESTReactionsTableSeeder extends Seeder
{
    public function run(): void
    {
        $reactions = [
            [
                'user_id' => 1,
                'post_id' => 2,
                'reaction_type_id' => 1, // like
            ],
            [
                'user_id' => 2,
                'post_id' => 1,
                'reaction_type_id' => 2, // bookmark
            ],
        ];

        foreach ($reactions as $reaction) {
            DB::table('reactions')->insert(array_merge($reaction, [
                'created_at' => now(),
                'updated_at' => now(),
            ]));
        }
    }
}
