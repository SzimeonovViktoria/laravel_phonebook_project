<?php

    namespace Database\Factories;

    use Illuminate\Database\Eloquent\Factories\Factory;

    /**
     * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
     */
    class UserFactory extends Factory{

        /**
         * Define the model's default state.
         *
         * @return array<string, mixed>
         */
        public function definition(): array{

            return [
                'name'            => fake()->name(),
                'home_country'    => fake()->country(),
                'home_city'       => fake()->city(),
                'home_address'    => fake()->address(),
                'mailing_country' => fake()->country(),
                'mailing_city'    => fake()->city(),
                'mailing_address' => fake()->address(),
            ];
        }

    }
