<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompromissosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('compromissos')->insert([
            ['titulo' => 'Compromisso 1',
            'quando' => '2025-05-14T20:23',],
            ['titulo' => 'Compromisso 2',
            'quando' => '2025-05-14T22:23',]
        ],
    );
    }
}
