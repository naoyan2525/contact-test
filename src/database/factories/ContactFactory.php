<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
     public function definition()
    {
        return [
            'last_name' => $this->faker->lastName(),
            'first_name' => $this->faker->firstName(),
            'gender' => $this->faker->randomElement(['男性', '女性', 'その他']),
            'email' => $this->faker->unique()->safeEmail(),
            'tel' => $this->faker->numerify('090########'),
            'address' => $this->faker->address(),
            'building' => $this->faker->secondaryAddress(),
            'category_id' => $this->faker->numberBetween(1, 5),
            'detail' => $this->faker->realText(50),
        ];
    }
}
