<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LotterySeeder extends Seeder
{
    public function run()
    {
        DB::table('lotteries')->insert([
            'name' => 'Sorteo de automóvil 0km',
            'description' => 'Celebración de aniversario',
            'active' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
