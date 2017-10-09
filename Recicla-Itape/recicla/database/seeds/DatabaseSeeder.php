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
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'img'=> 'broken-2591910_640.jpg',
            'LinkVideo'=> 'http://www.youtube.com/embed/V4qgUdwze6E',
            'dataHora' => '2017-08-12 13:30:12',
        ]);
        DB::table('tutoriais')->insert([
            'autor'=> 'Miqueias Fernando',
            'titulo'=> 'Reciclagem: Decoração com material reciclável',
            'resumo'=> 'Acredite ou não mas aquele caixote feio e sem graça que você vê do ladinho da barraca de verduras toda vez que vai até a feira pode se transformar em móveis bastante úteis e bonitos para a sua casa. Você pode montar estantes com eles para guardar livros e objetos de decoração, por exemplo, ou pode fazer um banco estiloso que sirva de sapateira também.',
            'texto'=> 'A preservação do meio ambiente começa com pequenas atitudes diárias, que fazem toda a diferença. Uma das mais importantes é a reciclagem do lixo. As vantagens da separação do lixo doméstico ficam cada vez mais evidentes. Além de aliviar os lixões e aterros sanitários, chegando até eles apenas os rejeitos (restos de resíduos que não podem ser reaproveitáveis), grande parte dos resíduos sólidos gerados em casa pode ser reaproveitada. A reciclagem economiza recursos naturais e gera renda para os catadores de lixo, parte da população que depende dos resíduos sólidos descartados para sobreviver.

            Segundo a última pesquisa Nacional de Saneamento Básico do Instituto Brasileiro de Geografia e Estatística (IBGE), são recolhidas no Brasil cerca de 180 mil toneladas diárias de resíduos sólidos. O rejeito é resultante de atividades de origem urbana, industrial, de serviços de saúde, rural, especial ou diferenciada. Esses materiais gerados nessas atividades são potencialmente matéria prima e/ou insumos para produção de novos produtos ou fonte de energia.
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'img'=> 'trash-1731503_640.jpg',
            'LinkVideo'=> 'http://www.youtube.com/embed/V4qgUdwze6E',
            'dataHora' => '2017-08-12 13:30:12',
        ]);

        DB::table('tutoriais')->insert([
            'autor'=> 'Miqueias Fernando',
            'titulo'=> 'Cooperativa: O que é, para que serve, como funciona',
            'resumo'=> 'A população brasileira gera diariamente aproximadamente 126 mil toneladas de lixo e são muitas as discussões sobre o destino deste material e o que fazer para que ele não prejudique o meio ambiente. A reciclagem tem sido uma grande solução e ela começa dentro de casa, com a separação do lixo. Mas e depois? Qual é o processo até que esses resíduos sejam reciclados?',
            'texto'=> 'A preservação do meio ambiente começa com pequenas atitudes diárias, que fazem toda a diferença. Uma das mais importantes é a reciclagem do lixo. As vantagens da separação do lixo doméstico ficam cada vez mais evidentes. Além de aliviar os lixões e aterros sanitários, chegando até eles apenas os rejeitos (restos de resíduos que não podem ser reaproveitáveis), grande parte dos resíduos sólidos gerados em casa pode ser reaproveitada. A reciclagem economiza recursos naturais e gera renda para os catadores de lixo, parte da população que depende dos resíduos sólidos descartados para sobreviver.

            Segundo a última pesquisa Nacional de Saneamento Básico do Instituto Brasileiro de Geografia e Estatística (IBGE), são recolhidas no Brasil cerca de 180 mil toneladas diárias de resíduos sólidos. O rejeito é resultante de atividades de origem urbana, industrial, de serviços de saúde, rural, especial ou diferenciada. Esses materiais gerados nessas atividades são potencialmente matéria prima e/ou insumos para produção de novos produtos ou fonte de energia.
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'img'=> 'trash-2497059_640.jpg',
            'LinkVideo'=> 'http://www.youtube.com/embed/V4qgUdwze6E',
            'dataHora' => '2017-08-12 13:30:12',
        ]);
        DB::table('tutoriais')->insert([
            'autor'=> 'Miqueias Fernando',
            'titulo'=> 'Como fazer compostagem?',
            'resumo'=> 'Ter uma composteira caseira é um ótimo jeito de reduzir a quantidade de lixo que iria para os aterros e também uma forma de mudar a relação das pessoas com o lixo que elas geram.
A composteira doméstica decompõe os alimentos por meio da ação de micro-organismos e, com a ajuda de minhocas, transformam os restos de frutas, legumes e verduras em um rico adubo, tanto líquido, como sólido.',
            'texto'=> 'A preservação do meio ambiente começa com pequenas atitudes diárias, que fazem toda a diferença. Uma das mais importantes é a reciclagem do lixo. As vantagens da separação do lixo doméstico ficam cada vez mais evidentes. Além de aliviar os lixões e aterros sanitários, chegando até eles apenas os rejeitos (restos de resíduos que não podem ser reaproveitáveis), grande parte dos resíduos sólidos gerados em casa pode ser reaproveitada. A reciclagem economiza recursos naturais e gera renda para os catadores de lixo, parte da população que depende dos resíduos sólidos descartados para sobreviver.

            Segundo a última pesquisa Nacional de Saneamento Básico do Instituto Brasileiro de Geografia e Estatística (IBGE), são recolhidas no Brasil cerca de 180 mil toneladas diárias de resíduos sólidos. O rejeito é resultante de atividades de origem urbana, industrial, de serviços de saúde, rural, especial ou diferenciada. Esses materiais gerados nessas atividades são potencialmente matéria prima e/ou insumos para produção de novos produtos ou fonte de energia.
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'img'=> 'collection-111082_640.jpg',
            'LinkVideo'=> 'http://www.youtube.com/embed/V4qgUdwze6E',
            'dataHora' => '2017-08-12 13:30:12',
        ]);





        DB::table('tutoriais')->insert([
            'autor'=> 'Miqueias Fernando',
            'titulo'=> 'Entenda os processos por trás da reciclagem de equipamentos eletrônicos',
            'resumo'=> 'No Brasil, existem os postos coletores, mercados e revendedores de produtos eletrônicos que aceitam os Resíduos de Equipamentos Elétricos e Eletrônicos (REEE). Apesar de não possuir uma alta tecnologia de reciclagem, o país inicia essa caminhada para intervir na crescente produção de lixo eletrônico. Após a coleta do e-lixo, o processo de reciclagem de equipamentos eletrônicos se inicia por meio de uma triagem, que pode ser feita manualmente ou por um computador....',
            'texto'=> 'A preservação do meio ambiente começa com pequenas atitudes diárias, que fazem toda a diferença. Uma das mais importantes é a reciclagem do lixo. As vantagens da separação do lixo doméstico ficam cada vez mais evidentes. Além de aliviar os lixões e aterros sanitários, chegando até eles apenas os rejeitos (restos de resíduos que não podem ser reaproveitáveis), grande parte dos resíduos sólidos gerados em casa pode ser reaproveitada. A reciclagem economiza recursos naturais e gera renda para os catadores de lixo, parte da população que depende dos resíduos sólidos descartados para sobreviver.

            Segundo a última pesquisa Nacional de Saneamento Básico do Instituto Brasileiro de Geografia e Estatística (IBGE), são recolhidas no Brasil cerca de 180 mil toneladas diárias de resíduos sólidos. O rejeito é resultante de atividades de origem urbana, industrial, de serviços de saúde, rural, especial ou diferenciada. Esses materiais gerados nessas atividades são potencialmente matéria prima e/ou insumos para produção de novos produtos ou fonte de energia.
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'img'=> 'motherboard-1219352_640.jpg',
            'LinkVideo'=> 'http://www.youtube.com/embed/V4qgUdwze6E',
            'dataHora' => '2017-08-12 13:30:12',
        ]);DB::table('tutoriais')->insert([
            'autor'=> 'Miqueias Fernando',
            'titulo'=> 'O Lixo e suas consequências',
            'resumo'=> 'Segundo o site Ajuda Brasil*, a quantidade de lixo produzido diariamente pelo homem é de aproximadamente 2,5 kg/hab/dia e se somarmos toda a produção mundial, os números são assustadores, só no Brasil o lixo produzido chega ao total de 240 mil toneladas por dia.
            Diante de tais dados, observamos que somos e muito, responsáveis pelas grandes ‘catástrofes naturais’ que vem ocorrendo no país durante os últimos tempos.',
            'texto'=> 'A preservação do meio ambiente começa com pequenas atitudes diárias, que fazem toda a diferença. Uma das mais importantes é a reciclagem do lixo. As vantagens da separação do lixo doméstico ficam cada vez mais evidentes. Além de aliviar os lixões e aterros sanitários, chegando até eles apenas os rejeitos (restos de resíduos que não podem ser reaproveitáveis), grande parte dos resíduos sólidos gerados em casa pode ser reaproveitada. A reciclagem economiza recursos naturais e gera renda para os catadores de lixo, parte da população que depende dos resíduos sólidos descartados para sobreviver.

            Segundo a última pesquisa Nacional de Saneamento Básico do Instituto Brasileiro de Geografia e Estatística (IBGE), são recolhidas no Brasil cerca de 180 mil toneladas diárias de resíduos sólidos. O rejeito é resultante de atividades de origem urbana, industrial, de serviços de saúde, rural, especial ou diferenciada. Esses materiais gerados nessas atividades são potencialmente matéria prima e/ou insumos para produção de novos produtos ou fonte de energia.
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'img'=> 'corridor-1045441_640.jpg',
            'LinkVideo'=> 'http://www.youtube.com/embed/V4qgUdwze6E',
            'dataHora' => '2017-08-12 13:30:12',
        ]);
        /*db:seed*/
    }
}
