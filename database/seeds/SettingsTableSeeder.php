<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
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
            DB::table('settings')->insert(
                [
                    'operation_hours' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                    'address' => $faker->address,
                    'phone_number' => $faker->phoneNumber,
                    'email' => $faker->email,
                    'facebook' => $faker->facebook,
                    'instagram' => $faker->instagram,
                ]);
        }
    }
}
