<?php

use Illuminate\Database\Seeder;

class BreedsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $breeds = [
            ['id' => 1, 'name' => 'Domestic'],
            ['id' => 2, 'name' => 'Persian'],
            ['id' => 3, 'name' => 'Siamese'],
            ['id' => 4, 'name' => 'Abyssinian'],
            ['id' => 5, 'name' => 'Other']
        ];
        
        DB::table('breeds')->insert($breeds);
    }
}
