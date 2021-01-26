<?php

namespace Database\Factories;

use App\Models\Flight;
use Illuminate\Database\Eloquent\Factories\Factory;

class FlightFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Flight::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'origin' => 'CDMX',
            'destiny' => $this->faker->city,
            'time' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '30 days', $timezone = 'America/Mexico_City'),
        ];
    }
}
