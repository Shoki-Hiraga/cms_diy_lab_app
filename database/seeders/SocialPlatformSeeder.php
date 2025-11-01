<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;     // DBファサードをuse
use Illuminate\Support\Facades\Schema;  // Schemaファサードをuse

class SocialPlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 外部キー制約を一時的に無効化 (安全のため)
        Schema::disableForeignKeyConstraints();

        // 既存のデータをすべて削除（truncateでIDもリセット）
        DB::table('social_platforms')->truncate();

        // 外部キー制約を再度有効化
        Schema::enableForeignKeyConstraints();

        // 現在時刻を取得
        $now = now();

        // 挿入するデータ配列
        $platforms = [
            ['name' => 'Twitter', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Instagram', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Facebook', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'LinkedIn', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'TikTok', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'YouTube', 'created_at' => $now, 'updated_at' => $now],
        ];

        // データを一括挿入
        DB::table('social_platforms')->insert($platforms);
    }
}