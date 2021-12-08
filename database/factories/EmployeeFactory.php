<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ic' => $this->faker->randomNumber(9),
            'name'  => $this->faker->name(),
            'position' => $this->faker->text(5),
            'department' => $this->faker->text(5),
            'retiring_num' => $this->faker->randomNumber(9),
            'retiring_date' => $this->faker->date(),
            'retiring_type' => $this->faker->text(5),
            'address' => $this->faker->text(300),
            'phone_num' => $this->faker->randomNumber(9),
            'image' => "https://source.unsplash.com/random/200x200?sig=" . strval($this->faker->randomNumber(9)),
        ];
    }
}