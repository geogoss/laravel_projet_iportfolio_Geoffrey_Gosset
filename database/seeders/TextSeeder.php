<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TextSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('texts')->insert([
            ['text' => 'Designer'],
            ['text' => 'Developer'],
            ['text' => 'Freelancer'],
            ['text' => 'Photographer']
            
        ]);
    }
}
