<?php

namespace Database\Factories;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StudentExtracurricularFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        for ($i=0; $i < 20; $i++) {
            $data[$i]=$i+1;
        }
        return [
            'student_id' => Arr::random($data),
            'extracurricular_id' => Arr::random([1, 2, 3, 4, 5, 6])
        ];
    }
}
