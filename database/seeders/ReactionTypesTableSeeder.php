<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReactionTypesTableSeeder extends Seeder
{
    public function run(): void
    {
        $types = ['like', 'bookmark'];

        foreach ($types as $name) {
            DB::table('reaction_types')->insert([
                'name' => $name,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
