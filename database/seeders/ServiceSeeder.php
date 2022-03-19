<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([

            ['icone' => 'bi bi-briefcase', 
            'title' => 'Lorem Ipsum', 
            'text' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident', 
            'delay' => 1],

            ['icone' => 'bi bi-card-checklist', 
            'title' => 'Dolor Sitema', 
            'text' => 'Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata', 
            'delay' => 100],

            ['icone' => 'bi bi-bar-chart', 
            'title' => 'Sed ut perspiciatis', 
            'text' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 
            'delay' => 200],

            ['icone' => 'bi bi-binoculars', 
            'title' => 'Magni Dolores', 
            'text' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 
            'delay' => 300],

            ['icone' => 'bi bi-brightness-high', 
            'title' => 'Nemo Enim', 
            'text' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque', 
            'delay' => 400],
            
            ['icone' => 'bi bi-calendar4-week', 
            'title' => 'Eiusmod Tempor', 
            'text' => 'Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi', 
            'delay' => 500],

        ]);
    }
}
