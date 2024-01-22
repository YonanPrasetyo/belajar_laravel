<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Extracurricular;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ExtracurricularSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Extracurricular::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            ['name' => 'basket'],
            ['name' => 'takraw'],
            ['name' => 'pramuka'],
            ['name' => 'pmr'],
            ['name' => 'voli'],
            ['name' => 'sepak bola'],
        ];

        foreach ($data as $value) {
            Extracurricular::insert([
                'name'=> $value['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
