<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(VenueSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(EventTypeTableSeeder::class);
        factory('App\User', 9)->create();
        factory('App\EventOrganizer', 10)->create();
    }
}
