<?php

namespace Database\Factories;

use App\Models\Material;
use App\Models\Request;
use App\Models\User;
use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

class RequestFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Request::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'materials' => json_encode(Material::query()->take(10)->get()->toArray()),
            'status' => $this->faker->randomElement($array = ['waiting', 'approved', 'reproved']),
            'created_at' => new DateTime,
            'user_id' => $this->faker->numberBetween(1, User::count())
        ];
    }
}
