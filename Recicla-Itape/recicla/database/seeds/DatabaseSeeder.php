<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$this->call(UserTableSeeder::class);*/
       DB::table('admins')->insert([
        	'name' => 'Miqueias Fernando',
        	'email'=> 'miqueiasfernando@gmail.com',
        	'password'=> hash::make('123456'),
        ]);
    /*db:seed*/
    }
}
