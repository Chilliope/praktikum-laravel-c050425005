<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MatakuliahFactory extends Factory
{
    public function definition(): array
    {
        return [
            'kode_mk' => fake()->unique()->bothify('MK###'),
            'nama_mk' => fake()->randomElement([
                'Pemrograman Web',
                'Basis Data',
                'Struktur Data',
                'Rekayasa Perangkat Lunak',
                'Pemrograman Berorientasi Objek',
                'Jaringan Komputer',
                'Sistem Operasi',
                'Statistika',
            ]),
            'sks' => fake()->numberBetween(1, 4),
            'semester' => fake()->numberBetween(1, 8),
        ];
    }
}
