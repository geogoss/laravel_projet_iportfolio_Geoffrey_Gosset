<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(
            [AboutSeeder::class, SkillSeeder::class, HeroSeeder::class, TextSeeder::class, PortfolioSeeder::class, ServiceSeeder::class, TestimonialSeeder::class, ContactSeeder::class]
        );
    }
}
