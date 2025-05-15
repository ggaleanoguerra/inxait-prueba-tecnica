<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call([
            PaisesSeeder::class,
            DepartamentosSeeder::class,
            MunicipiosSeeder::class,
            LotterySeeder::class,
            UserSeeder::class,
            ParticipantLotterySeeder::class,

        ]);
    }
}
