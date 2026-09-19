<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->count(20)->create();
    }
}
