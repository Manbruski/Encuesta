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
         'name' => 'default',
         'email' => 'admin@utn.ac.cr',
         'password' => bcrypt('123456'),
     ]);
    }
}
