<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Author;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Author>
 */
class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Author::class;

    public function definition()
    {
        return [
            //
            "name" => $this->faker->name,
            "title" => $this->faker->jobTitle,
            "company" => $this->faker->company,
            "email" => $this->faker->unique()->companyEmail,
        ];
    }
}