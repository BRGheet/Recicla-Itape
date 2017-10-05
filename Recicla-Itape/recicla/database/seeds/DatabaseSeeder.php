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
       /*DB::table('admins')->insert([
        	'name' => 'Miqueias Fernando',
        	'email'=> 'miqueiasfernando@gmail.com',
        	'password'=> hash::make('123456'),
        ]);*/
        DB::table('tutoriais')->insert([
            'data' => '2017-08-12 13:30:12',
            'titulo'=> 'Teste Busca Banco',
            'autor'=> 'miqueias',
            'texto'=> 'Um dos principais focos de nosso portal é trazer a vocês, leitoras e leitores queridos, dicas para reciclar inúmeros materiais aí na sua casa, visando sempre a preservação do meio ambiente, de maneira prática e criativa.
E um destes materiais que oferecem inúmeras ideias de artesanato é a garrafa pet, um material que pode ser reciclado de várias formas, e com isso vai garantir uma boa renda extra para toda família.
Pensando nisso hoje viemos lhes dar algumas dicas para reciclar garrafas pet aí na sua casa, de forma simples e bem especial',
            'img'=> 'broken-2591910_640.jpg',
        ]);
    /*db:seed*/
    }
}
