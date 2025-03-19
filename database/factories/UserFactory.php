<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->firstName,
            'surname' => $this->faker->lastName,
            'login' => $this->faker->unique()->userName,
            'password' => bcrypt('password'), // password
            'is_blocked' => $this->faker->boolean,
            'has_admin_access' => $this->faker->boolean,
            'remember_token' => Str::random(10),
        ];
    }
}
