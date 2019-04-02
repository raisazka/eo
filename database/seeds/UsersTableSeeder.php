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
        DB::table('users')->insert([
            'name' => 'Rais',
            'email' => 'raisazka@gmail.com',
            'password' => bcrypt('12345678'),
            'phone' => '082129519651'
        ]);
    }
}
