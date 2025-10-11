<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ToolsTableSeeder extends Seeder
{
    public function run(): void
    {
        $tools = [
            'サンダー',
            '溶接機',
            'ノコギリ・ジグソー',
            'スプレーガン',
            'インパクトレンチ',
            'ドライバー',
            'ペンチ・プライヤー',
            'ハンマー・バール',
            'メジャー・定規・さしがね',
            'カッターナイフ・ハサミ',
            'ヤスリ・サンドペーパー',
            '水平器',
            'レンチ・スパナ',
            '電動ドリル・インパクトドライバー',
            'ルーター・トリマー',
            '高圧洗浄機',
            'ヒートガン',
            'コンベックス',
            'クランプ・バイス',
            '鉋(かんな)',
            '鑿(のみ)',
            '錐(きり)',
        ];

        foreach ($tools as $name) {
            DB::table('tools')->insert([
                'name' => $name,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
