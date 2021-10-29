<?php

use Illuminate\Database\Seeder;
use App\Trip;
class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trip = new Trip();
        $trip->description = 'Lorem ipsum';
        $trip->name = 'Londra';
        $trip->price = 100;
        $trip->save();
    }
}
