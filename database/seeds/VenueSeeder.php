<?php

use Illuminate\Database\Seeder;

class VenueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('venues')->insert([
            'name' => 'BSD International Convention Center',
            'address' => 'Jl. Haji Agus, Jakarta Barat',
            'image' => 'https://blogmedia.evbstatic.com/wp-content/uploads/wpmulti/sites/19/venue.jpg',
            'seat_capacity' => 100,
            'description' => 'The Convention Center for All People',
            'price' => '20000000',
            'facilities' => 'AC, Sound System, Panggung, Layar Lebar',
            'latitude' => -6.2282,
            'longitude' => 106.8327
        ]);

        DB::table('venues')->insert([
            'name' => 'Jakarta Convention Center',
            'address' => 'Jl. Haji Agus, Jakarta Timur',
            'image' => 'https://blogmedia.evbstatic.com/wp-content/uploads/wpmulti/sites/19/venue.jpg',
            'seat_capacity' => 100,
            'description' => 'The Convention Center for All People',
            'price' => '20000000',
            'facilities' => 'AC, Sound System, Panggung, Layar Lebar',
            'latitude' => -6.2143,
            'longitude' => 106.8071
        ]);

        DB::table('venues')->insert([
            'name' => 'Hall Plaza Surabaya',
            'address' => 'Jl. Haji Agus, Surabaya Barat',
            'image' => 'https://blogmedia.evbstatic.com/wp-content/uploads/wpmulti/sites/19/venue.jpg',
            'seat_capacity' => 100,
            'description' => 'The Convention Center for All People',
            'price' => '20000000',
            'facilities' => 'AC, Sound System, Panggung, Layar Lebar',
            'latitude' => -6.2256,
            'longitude' => 106.7986
        ]);
    }
}
