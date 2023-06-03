<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TareasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array([
            'nombre_tarea'=>'realizar registros',
            'descripcion'=>'de nuevos empleados',
            'created_at'=>Carbon::now()
        ]);
        DB::table('tareas')->insert($data);

    }
}
