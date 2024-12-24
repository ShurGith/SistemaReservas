<?php

    namespace Database\Seeders;

    use App\Models\User;
    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\Hash;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

    class DatabaseSeeder extends Seeder
    {
        /**
         * Seed the application's database.
         */
        public function run(): void
        {
            User::factory()->create([
                'name' => 'Cliente 1',
                'email' => 'cliente1@example.com',
                'credit' => 5,
                'password' => Hash::make('1234'),
            ]);

            User::factory()->create([
                'name' => 'Cliente 2',
                'email' => 'cliente2@example.com',
                'credit' => 10,
                'password' => Hash::make('1234'),
            ]);

            $business = Business::create([
                'name' => 'Negocio 1',
                'phone' => '1234567890',
                'address' => 'Calle 123',
                'image' => fake()->imageUrl(word: 'Negocio 1'),
                'max_future_days' => 7,
                'slot_duration' => 30, s
            ]);

            $business->schedules()->createMany([
                [
                    'day_of_week' => 1,
                    'open_time' => '08:00',
                    'close_time' => '17:00',
                ],
                [
                    'day_of_week' => 2,
                    'open_time' => '08:00',
                    'close_time' => '17:00',
                ],
                [
                    'day_of_week' => 3,
                    'open_time' => '08:00',
                    'close_time' => '17:00',
                ],
                [
                    'day_of_week' => 4,
                    'open_time' => '08:00',
                    'close_time' => '17:00',
                ],
                [
                    'day_of_week' => 5,
                    'open_time' => '08:00',
                    'close_time' => '17:00',
                ],
                [
                    'day_of_week' => 6,
                    'open_time' => '08:00',
                    'close_time' => '12:00',
                ],
                [
                    'day_of_week' => 7,
                    'is_closed' => true,
                ],
            ]);

            $business = Business::create([
                'name' => 'Negocio 2',
                'phone' => '0987654321',
                'address' => 'Calle 321',
                'image' => fake()->imageUrl(word: 'Negocio 2'),
                'max_future_days' => 10,
                'slot_duration' => 60,
            ]);

            $business->schedules()->createMany([
                [
                    'day_of_week' => 1,
                    'open_time' => '08:00',
                    'close_time' => '20:00',
                ],
                [
                    'day_of_week' => 2,
                    'open_time' => '08:00',
                    'close_time' => '18:00',
                ],
                [
                    'day_of_week' => 3,
                    'open_time' => '08:00',
                    'close_time' => '17:00',
                ],
                [
                    'day_of_week' => 4,
                    'open_time' => '08:00',
                    'close_time' => '14:00',
                ],
                [
                    'day_of_week' => 5,
                    'open_time' => '08:00',
                    'close_time' => '17:00',
                ],
                [
                    'day_of_week' => 6,
                    'is_closed' => true,
                ],
                [
                    'day_of_week' => 7,
                    'is_closed' => true,
                ],
            ]);
        }
    }

