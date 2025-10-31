<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TESTTagsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tags')->insert([
            [
                'id' => 1,
                'name' => '木工',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'キャンプギア',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'ペイント',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
