<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class userDomicilioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'user_id' => User::factory(1)->create(),
            'domicilio' => $this->faker->address(),
            'numero_exterior' => $this->faker->buildingNumber(),
            'colonia' => $this->faker->streetAddress(),
            'cp' => rand(123, 450),
            'ciudad' => $this->faker->city(),
            'fecha_nacimento' => '2023-09-22',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::yesterday()
        ];
    }
}
