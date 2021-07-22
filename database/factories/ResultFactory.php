<?php

namespace Database\Factories;

use App\Models\Result;
use Illuminate\Database\Eloquent\Factories\Factory;

class ResultFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Result::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nik' => $this->faker->numberBetween(3000000000000000, 5000000000000000),
            'result' => $this->faker->randomElement(array('Positif', 'Negatif')),
            'name' => $this->faker->name,
            'hp' => $this->faker->phoneNumber,
        ];
    }
}
