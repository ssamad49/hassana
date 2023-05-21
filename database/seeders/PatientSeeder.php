<?php

namespace Database\Seeders;

use App\Models\Patient;
use App\Models\TypeDiabete;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Patient::factory()->count(10)->create();

    }



}
