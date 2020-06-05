<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cities')->insert([
            'city_name' => 'Chennai',
            'country_code' => 	'IN',
            'client_city_id' => 1264527,
        ]);
        DB::table('cities')->insert([
            'city_name' => 'Mumbai',
            'country_code' => 	'IN',
            'client_city_id' => 1275339,
        ]);
        DB::table('cities')->insert([
            'city_name' => 'New Delhi',
            'country_code' => 	'IN',
            'client_city_id' => 1261481,
        ]);
        DB::table('cities')->insert([
            'city_name' => 'Kolkata',
            'country_code' => 	'IN',
            'client_city_id' => 1275004,
        ]);
        DB::table('cities')->insert([
            'city_name' => 'Bengaluru',
            'country_code' => 	'IN',
            'client_city_id' => 1277333,
        ]);
    }
}
