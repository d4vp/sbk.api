<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bicicleta>
 */
class BicicletaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => rand(1,10),
            'title' => $this->faker->name(),
            'image' => $this->faker->name(),
            'serial' => $this->faker->numberBetween(),
            'color' => $this->faker->text(7),
            'marca' => $this->faker->text(10),
            'descripcion' => $this->faker->text(300),
        ];
    }
}
