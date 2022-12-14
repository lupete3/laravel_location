<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeArticletableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_articles')->insert([
            ['nom' => 'Immobilier'],
            ['nom' => 'Voiture'],
            ['nom' => 'Television'],
            ['nom' => 'Generateur'],
            ['nom' => 'Salle'],
        ]);
    }
}
