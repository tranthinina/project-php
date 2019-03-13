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
        $faker = Faker\Factory::create ();
        for ($i=1; $i < 10; $i++) { 
            DB::table('users')->insert(
            [
            'fullname' => 'Tran Na',
            'password' => $faker->password,
            'phone_number' => '0775440700',
            'address' => '38 Yen Bai',
            'email' => 'na '.  $i .' @gmail.com',
            'birthday' => '1990/04/24',
            'role' => '1',
            ]);
    }
}
}
