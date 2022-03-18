<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            [
                'img' => 'img/profile-img.jpg',
                'title' => 'UI/UX Designer &amp; Web Developer.',
                'birthday' => '1 May 1995',
                'website' => 'www.example.com',
                'phone' => '+123 456 7890',
                'city' => 'New York, USA',
                'age' => '30',
                'degree' => 'Master',
                'email' => 'email@example.com',
                'freelance' => 'Available',
            ]
        ]);
    }
}
