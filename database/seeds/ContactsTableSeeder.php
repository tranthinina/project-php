<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
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
            DB::table('contacts')->insert(
                [
                    'name' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                    'phone_number' => $faker->phoneNumber,
                    'email' => $faker->email,
                    'address' => $faker->address,
                    'content' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                ]);
        }
    }
}
