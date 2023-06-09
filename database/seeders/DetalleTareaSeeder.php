<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DetalleTareaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array([
            'fecha_inicio' => '2023-06-01',
            'fecha_fin' => '2023-12-01',
            'id_area' => 1,
            'id_empleado' => 1,
            'id_tarea' => 1,
            'id_estado' => 1,
            // 'created_at' =>Carbon::now()
        ]);

            //Insert data into table
            DB::table('tarea_detalle')->insert($data);
    }
}
