<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Materia;
class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Materia::create([
            'nombre' => 'Campus de robótica',
            'tema' => 'Se hacen paginas web',
            'curso' => '5°A',
        ]);

        Materia::create([
            'nombre' => 'Campus de robótica',
            'tema' => 'Se hace arduino',
            'curso' => '4°A',
        ]);

        Materia::create([
            'nombre' => 'biologia',
            'tema' => 'Se hace huerta',
            'curso' => '4°B',
        ]);
    }
}
