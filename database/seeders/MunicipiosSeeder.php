<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class MunicipiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('municipios')->truncate();

        $csvFile = storage_path('app/municipios.csv');

        // Verificar si el archivo existe
        if (!File::exists($csvFile)) {
            $this->command->error("El archivo $csvFile no existe.");
            return;
        }

        // Leer el archivo CSV
        $csvData = File::get($csvFile);
        $lines = explode("\n", $csvData);

        // Eliminar la primera línea (encabezados)
        array_shift($lines);

        // Procesar cada línea
        foreach ($lines as $line) {
            if (empty(trim($line))) continue;

            // Parsear la línea CSV
            $data = str_getcsv($line);

            // Verificar que la línea tenga los campos esperados
            if (count($data) >= 4) {
                DB::table('municipios')->insert([
                    'id' => $data[0],
                    'name' => $data[1],
                    'code' => $data[2],
                    'departamento_id' => $data[3],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        $this->command->info('Municipios importados exitosamente!');
    }
}
