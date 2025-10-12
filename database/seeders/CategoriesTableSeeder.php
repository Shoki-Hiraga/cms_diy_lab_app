<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            '修理',
            'ガーデニング',
            '屋上・ベランダ',
            '庭づくり',
            '車',
            'バイク',
            '自転車',
            '単管パイプ',
            '家具制作',
            'ホームインテリア',
            '照明',
            'リフォーム',
            'リペア',
            '電子工作',
            '子どものおもちゃ',
            'ペット',
            '100均DIY',
            'キャンプ・アウトドア',
            '塗装',
            'リサイクル',
            '収納',
            '壁・床',
            '木工',
            '溶接・金属加工',
            '編み物・手芸',
            'ガジェット',
        ];

        foreach ($categories as $name) {
            DB::table('categories')->insert([
                'name' => $name,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
