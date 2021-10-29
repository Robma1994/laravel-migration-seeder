<?php

use Illuminate\Database\Seeder;
use App\Trip;
use Faker\Generator as Faker;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 50; $i++) {
            $trip = new Trip();
            $trip->description = $faker->text($maxNbChars = 200);
            $trip->name = $faker->city();
            $trip->price = $faker->randomFloat(2, 100, 20_000);
            $trip->save();
        }
        
    }
}
