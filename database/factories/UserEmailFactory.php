<?php

    namespace Database\Factories;

    use App\Models\User;
    use Illuminate\Database\Eloquent\Factories\Factory;

    /**
     * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
     */
    class UserEmailFactory extends Factory{

        /**
         * Define the model's default state.
         *
         * @return array<string, mixed>
         */
        public function definition(): array{

            $users = User::all( 'id' );

            return [
                'email'   => fake()->email(),
                'user_id' => $users->random(),
            ];
        }
    }
