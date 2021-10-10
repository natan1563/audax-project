<?php

namespace Database\Factories;

use App\Models\Material;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class MaterialFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Material::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement($array = ['Vassoura', 'Cadeira', 'Mesa', 'Caneca', 'Notebook', 'Teclado']),
            'user_id' => $this->faker->numberBetween(1, User::count())
        ];
    }
}
