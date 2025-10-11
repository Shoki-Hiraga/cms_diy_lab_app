<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DifficultiesTableSeeder extends Seeder
{
    public function run(): void
    {
        foreach (range(1, 5) as $level) {
            DB::table('difficulties')->insert([
                'level' => $level,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
