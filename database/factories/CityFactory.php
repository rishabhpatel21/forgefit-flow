<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\City>
 */
class CityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'name' => $this->faker->name(),
            'name' => $this->faker->randomElement([
                'Ahmedabad', 'Surat', 'Vadodara', 'Rajkot',
                 'Bhavnagar', 'Jamnagar', 'Junagadh', 'Gandhinagar',
                  'Nadiad', 'Morbi', 'Surendranagar', 'Bharuch', 'Anand',
                   'Porbandar', 'Godhra', 'Navsari', 'Veraval', 'Valsad',
                    'Bhuj', 'Ankleshwar', 'Mehsana', 'Palanpur', 'Vapi',
                     'Amreli'
            ]),
        ];
    }
}
