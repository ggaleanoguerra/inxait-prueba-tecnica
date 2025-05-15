<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class DepartamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $departamentos = [
            ['id' => 1, 'name' => 'Amazonas', 'code' => '91', 'pais_id' => 42],
            ['id' => 2, 'name' => 'Antioquia', 'code' => '05', 'pais_id' => 42],
            ['id' => 3, 'name' => 'Arauca', 'code' => '81', 'pais_id' => 42],
            ['id' => 4, 'name' => 'Atlántico', 'code' => '08', 'pais_id' => 42],
            ['id' => 5, 'name' => 'Bogotá D.C.', 'code' => '11', 'pais_id' => 42],
            ['id' => 6, 'name' => 'Bolívar', 'code' => '13', 'pais_id' => 42],
            ['id' => 7, 'name' => 'Boyacá', 'code' => '15', 'pais_id' => 42],
            ['id' => 8, 'name' => 'Caldas', 'code' => '17', 'pais_id' => 42],
            ['id' => 9, 'name' => 'Caquetá', 'code' => '18', 'pais_id' => 42],
            ['id' => 10, 'name' => 'Casanare', 'code' => '85', 'pais_id' => 42],
            ['id' => 11, 'name' => 'Cauca', 'code' => '19', 'pais_id' => 42],
            ['id' => 12, 'name' => 'Cesar', 'code' => '20', 'pais_id' => 42],
            ['id' => 13, 'name' => 'Chocó', 'code' => '27', 'pais_id' => 42],
            ['id' => 14, 'name' => 'Córdoba', 'code' => '23', 'pais_id' => 42],
            ['id' => 15, 'name' => 'Cundinamarca', 'code' => '25', 'pais_id' => 42],
            ['id' => 16, 'name' => 'Guainía', 'code' => '94', 'pais_id' => 42],
            ['id' => 17, 'name' => 'Guaviare', 'code' => '95', 'pais_id' => 42],
            ['id' => 18, 'name' => 'Huila', 'code' => '41', 'pais_id' => 42],
            ['id' => 19, 'name' => 'La Guajira', 'code' => '44', 'pais_id' => 42],
            ['id' => 20, 'name' => 'Magdalena', 'code' => '47', 'pais_id' => 42],
            ['id' => 21, 'name' => 'Meta', 'code' => '50', 'pais_id' => 42],
            ['id' => 22, 'name' => 'Nariño', 'code' => '52', 'pais_id' => 42],
            ['id' => 23, 'name' => 'Norte de Santander', 'code' => '54', 'pais_id' => 42],
            ['id' => 24, 'name' => 'Putumayo', 'code' => '86', 'pais_id' => 42],
            ['id' => 25, 'name' => 'Quindío', 'code' => '63', 'pais_id' => 42],
            ['id' => 26, 'name' => 'Risaralda', 'code' => '66', 'pais_id' => 42],
            ['id' => 27, 'name' => 'San Andrés', 'code' => '88', 'pais_id' => 42],
            ['id' => 28, 'name' => 'Santander', 'code' => '68', 'pais_id' => 42],
            ['id' => 29, 'name' => 'Sucre', 'code' => '70', 'pais_id' => 42],
            ['id' => 30, 'name' => 'Tolima', 'code' => '73', 'pais_id' => 42],
            ['id' => 31, 'name' => 'Valle del Cauca', 'code' => '76', 'pais_id' => 42],
            ['id' => 32, 'name' => 'Vaupés', 'code' => '97', 'pais_id' => 42],
            ['id' => 33, 'name' => 'Vichada', 'code' => '99', 'pais_id' => 42],
        ];

        foreach ($departamentos as $departamento) {
            $departamento['created_at'] = Carbon::now();
            $departamento['updated_at'] = Carbon::now();

            DB::table('departamentos')->insert($departamento);
        }
    }
}
