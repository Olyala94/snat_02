<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            SettingsTableSeeder::class,
            RoutesTableSeeder::class,
            PagesTableSeeder::class,
            RedirectRulesTableSeeder::class,
        ]);
    }
}
