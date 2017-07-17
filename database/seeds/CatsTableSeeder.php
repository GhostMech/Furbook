<?php

use Illuminate\Database\Seeder;

class CatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create a Faker instance
        $faker = Faker\Factory::create();
        
        // Create 25 cats
        $sex = ['male', 'female'];
        
        for ($i=0; $i<25; $i++) {
            DB::table('cats')->insert([
                'name' => $faker->lastName,
                'sex' => $sex[rand(0, 1)],
                'date_of_birth' => $faker->date,
                'owner_email' => $faker->unique()->email,
                'breed_id' => rand(1, 5)
            ]);
        }
    }
}
