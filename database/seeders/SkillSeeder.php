<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            
               ['skillname' => 'html', 'pourcentage' => 100],
               ['skillname' => 'css', 'pourcentage' => 90],
               ['skillname' => 'javascript', 'pourcentage' => 75],
               ['skillname' => 'php', 'pourcentage' => 80],
               ['skillname' => 'wordpress', 'pourcentage' => 90],
               ['skillname' => 'photoshop', 'pourcentage' => 55],
               

            
        ]);
    }
}
