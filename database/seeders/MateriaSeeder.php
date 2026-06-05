<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Materia;

class MateriaSeeder extends Seeder
{
    public function run(): void
    {
        Materia::create([
            'nombre' => 'Programación Avanzada',
            'codigo' => 'SIS500',
            'creditos' => 4,
            'nota_obtenida' => 86,
        ]);

        Materia::create([
            'nombre' => 'Base de Datos',
            'codigo' => 'SIS420',
            'creditos' => 4,
            'nota_obtenida' => 78,
        ]);

        Materia::create([
            'nombre' => 'Ingeniería de Software',
            'codigo' => 'SIS430',
            'creditos' => 5,
            'nota_obtenida' => 82,
        ]);

        Materia::create([
            'nombre' => 'Redes de Computadoras',
            'codigo' => 'SIS410',
            'creditos' => 4,
            'nota_obtenida' => 69,
        ]);
    }
}