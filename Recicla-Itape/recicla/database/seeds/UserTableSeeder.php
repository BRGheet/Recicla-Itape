<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::create([
    		'nome' => 'joao',
    		'tipo' => '2',
    		'email' => 'joao@gmail.com',
    		'senha' => bcrypt('1234')
    		]);
    }
}
