<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['name', 'email', 'password'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function matakuliahs(): HasMany
    {
        return $this->hasMany(Matakuliah::class, 'dosen_id');
    }

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

            'dosen_id' => User::query()->inRandomOrder()->value('id'),
        ];
    }
}
