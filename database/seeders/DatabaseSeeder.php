<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CategoriesTableSeeder::class,
            ToolsTableSeeder::class,
            DifficultiesTableSeeder::class,
            ReactionTypesTableSeeder::class,

            // TEST用ダミーデータ
            TESTUsersTableSeeder::class,
            TESTPostsTableSeeder::class,
            TESTCommentsTableSeeder::class,
            TESTReactionsTableSeeder::class,
        ]);
    }
}