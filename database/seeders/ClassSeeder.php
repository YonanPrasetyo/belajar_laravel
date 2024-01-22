<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ClassRoom;
use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        ClassRoom::truncate();
        Schema::enableForeignKeyConstraints();

        $data =[
            ['name' => 'TI-1A', 'teacher' => '2'],
            ['name' => 'TI-1B', 'teacher' => '4'],
            ['name' => 'TI-1C', 'teacher' => '1'],
            ['name' => 'TI-1D', 'teacher' => '3']
        ];

        foreach ($data as $value) {
            ClassRoom::insert([
                'name' => $value['name'],
                'teacher_id' => $value['teacher'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }

    }
}
