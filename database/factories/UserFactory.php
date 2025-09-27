<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Country;
use App\Models\User;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->safeEmail(),
            'password' => fake()->password(),
            'email_verified_at' => fake()->dateTime(),
            'phone' => fake()->phoneNumber(),
            'address' => fake()->text(),
            'city' => fake()->city(),
            'province' => fake()->word(),
            'postal_code' => fake()->postcode(),
            'country_id' => Country::factory(),
        ];
    }
}
