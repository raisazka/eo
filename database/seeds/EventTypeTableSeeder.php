<?php

use Illuminate\Database\Seeder;

class EventTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('event_types')->insert([
            'name' => 'Birthday Party'
        ]);

        DB::table('event_types')->insert([
            'name' => 'Wedding'
        ]);

        DB::table('event_types')->insert([
            'name' => 'Reuni'
        ]);

    }
}
