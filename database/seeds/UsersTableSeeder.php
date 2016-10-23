<?php


use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;



class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
/*
    public function run()
    {
        DB::table('users')->insert([
            'name' => str_random(20),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'confirmation_code' => bcrypt('secret'),
            'remember_token' => bcrypt('secret'),

            'status' => 1,
            'confirmed' => 1,

        ]);
    }
*/

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,50) as $index) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('secret'),

                'confirmation_code' => bcrypt('secret'),
                'remember_token' => bcrypt('secret'),

                'status' => 1,
                'confirmed' => 1,
            ]);
        }
    }
}
