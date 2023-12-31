<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Student::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            ['name' => 'Yonan Prasetyo', 'gender' => 'L', 'nis' => '230102023', 'class_id' => 1],
            ['name' => 'Ego Irfandi', 'gender' => 'L', 'nis' => '2302020207', 'class_id' => 2],
            ['name' => 'Alfito Dwi', 'gender' => 'L', 'nis' => '2302020202', 'class_id' => 4],
            ['name' => 'Eval Putra', 'gender' => 'L', 'nis' => '2302020205', 'class_id' => 3]
        ];

        foreach ($data as $value) {
            Student::insert([
                'name' => $value['name'],
                'gender' => $value['gender'],
                'nis' => $value['nis'],
                'class_id' => $value['class_id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
