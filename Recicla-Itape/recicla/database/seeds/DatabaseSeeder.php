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
            'autor'=> 'Miqueias Fernando',
            'titulo'=> 'Reciclagem: Como Separar seu Lixo',
            'resumo'=> 'Aqui você vai descobrir maneiras fantásticas de fazer decoração com reciclagem.Com objetos feitos à mão você pode melhorar o visual da sua casa inteira, desde o jardim, até o quarto, cozinha, sala e banheiro. Sendo assim, mostraremos aqui vários artesanatos simples, todos feitos com materiais recicláveis, tais como: latas, garrafas de vidro, caixotes e papelão.Aqui você vai descobrir maneiras fantásticas de fazer decoração com reciclagem.',
            'texto'=> 'A preservação do meio ambiente começa com pequenas atitudes diárias, que fazem toda a diferença. Uma das mais importantes é a reciclagem do lixo. As vantagens da separação do lixo doméstico ficam cada vez mais evidentes. Além de aliviar os lixões e aterros sanitários, chegando até eles apenas os rejeitos (restos de resíduos que não podem ser reaproveitáveis), grande parte dos resíduos sólidos gerados em casa pode ser reaproveitada. A reciclagem economiza recursos naturais e gera renda para os catadores de lixo, parte da população que depende dos resíduos sólidos descartados para sobreviver.

            Segundo a última pesquisa Nacional de Saneamento Básico do Instituto Brasileiro de Geografia e Estatística (IBGE), são recolhidas no Brasil cerca de 180 mil toneladas diárias de resíduos sólidos. O rejeito é resultante de atividades de origem urbana, industrial, de serviços de saúde, rural, especial ou diferenciada. Esses materiais gerados nessas atividades são potencialmente matéria prima e/ou insumos para produção de novos produtos ou fonte de energia.

            Mais da metade desses resíduos é jogado, sem qualquer tratamento, em lixões a céu aberto. Com isso, o prejuízo econômico passa dos R$ 8 bilhões anuais. No momento, apenas 18% das cidades brasileiras contam com o serviço de coleta seletiva. Ao separar os resíduos, estão sendo dad os os primeiros passos para sua destinação adequada. Com a separação é possível: a reutilização; a reciclagem; o melhor valor agregado ao material a ser reciclado; as melhores condições de trabalho dos catadores ou classificadores dos materiais recicláveis; a compostagem; menor demanda da natureza; o aumento do tempo de vida dos aterros sanitários e menor impacto ambiental quando da disposição final dos rejeitos. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'img'=> 'broken-2591910_640.jpg',
            'LinkVideo'=> 'http://www.youtube.com/embed/V4qgUdwze6E',
            'dataHora' => '2017-08-12 13:30:12',
        ]);
/*db:seed*/
}
}
