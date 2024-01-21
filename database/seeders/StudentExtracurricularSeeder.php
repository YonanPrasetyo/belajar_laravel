<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StudentExtracurricular;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentExtracurricularSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StudentExtracurricular::factory(150)->create();
    }
}
