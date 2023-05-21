<?php

namespace Database\Seeders;

use App\Models\TypeDiabete;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeDiabeteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TypeDiabete::factory()->count(10)->create();
    }
}
