<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 1; $i < 10; $i++) {
            DB::table('users')->insert(
                [
                    'fullname' => $faker->firstNameMale,
                    'password' => bcrypt('123456'),
                    'phone_number' => $faker->phoneNumber,
                    'address' => $faker->address,
                    'email' => $faker->email,
                    'birthday' => $faker->date($format = 'Y-m-d', $max = 'now'),
                    'role' => rand(1, 3),
                ]);
        }
    }
}
