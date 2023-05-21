<?php

namespace Database\Seeders;

use App\Models\Suivi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuiviSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Suivi::factory()->count(10)->create();
    }
}
