<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaisesSeeder extends Seeder
{
    public function run()
    {
        DB::table('paises')->insert([
            'id' => 42,
            'code' => 169,
            'name' => 'COLOMBIA',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
