<?php

use Illuminate\Database\Seeder;

class CafesSeeder extends Seeder
{
    public function run()
    {
        DB::table('cafes')->insert(
            [
                'nome' => 'Café Espresso',
                'descricao' => 'O café espresso (ou expresso, dependendo da preferência de escrita) é um dos principais tipos de café – e é a base de diversos outros. O nome “espresso” vem do italiano “espremido, pressionado”. Ele é feito em poucos segundos sob alta pressão de água na temperatura de consumo. Isso faz com que acumule muito sabor e intensidade'
            ]
        );
        DB::table('cafes')->insert(
            [
                'nome' => 'Café Macchiato',
                'descricao' => 'O macchiato é muito parecido com o café espresso, mas adiciona uma dose de leite vaporizado para suavizar o sabor intenso do espresso. Ao redor do mundo, os baristas costumam fazer pequenas variações no macchiato, embora sempre sigam os procedimento básicos da receita original.
                    A receita original consiste em uma dose de espresso coberta com uma dose de leite vaporizado (ou em espuma) sobre o café. A receita clássica conta, ainda, com leite vaporizado e espuma de leite, em diferentes camadas.
                    A proporção original utiliza um terço de café, um terço de leite vaporizado e um terço de espuma (medidos de acordo com seu volume aparente).'
            ]
        );
        DB::table('cafes')->insert(
            [
                'nome' => 'Café Ristretto',
                'descricao' => 'O ristretto é uma versão mais concentrada do café espresso padrão. Entre os tipos de café mais populares, é o que apresenta maior intensidade. Basicamente, trata-se da extração da mesma quantidade de café de um espresso, mas em apenas metade da quantidade de água.
                    Para ser feito, basta utilizar metade da água na realização de um espresso, ou simplesmente interromper a máquina na metade do processo. Isso garante um sabor concentrado e bastante forte.'
            ]
        );
        DB::table('cafes')->insert(
            [
                'nome' => 'Café Latte',
                'descricao' => 'O Café Latte não é exatamente uma forma sofisticada de se tratar do café com leite. Em sua receita original, utiliza-se leite vaporizado misturado a uma dose de café espresso, além de 1 centímetro de espuma de leite servido sobre a bebida.
                    Diferencia-se de um Machiatto especialmente no que diz respeito à proporção e à forma como é servido. No Machiatto, as três camadas são servidas sem estarem misturadas dentro da xícara. Já no Latte, o café e o leite vaporizado são misturados, com a espuma servida sobre a mistura, separadamente.'
            ]
        );
        DB::table('cafes')->insert(
            [
                'nome' => 'Cappuccino',
                'descricao' => 'O Cappuccino é bastante parecido com um Latte, e é um dos tipos de café mais populares em cafeterias e bares ao redor do mundo. A diferença entre os dois está no fato de o cappuccino possuir mais leite vaporizado em sua fórmula, além de chocolate adicionado à receita.
                    Sua receita inclui uma dose de café espresso misturado com leite vaporizado, espuma de leite e chocolate em pequenos pedaços ou em pó sobre a bebida.
                    Diferencia-se de um Machiatto especialmente no que diz respeito à proporção e à forma como é servido. No Machiatto, as três camadas são servidas sem estarem misturadas dentro da xícara. Já no Latte, o café e o leite vaporizado são misturados, com a espuma servida sobre a mistura, separadamente.'
            ]
        );
        DB::table('cafes')->insert(
            [
                'nome' => 'Mocha',
                'descricao' => 'O Mocha é uma versão ainda mais achocolatada do Cappuccino. Na prática, é uma mistura entre um Cappuccino e chocolate quente. É feito a partir da mistura do chocolate em pó com uma dose de espresso, adicionando leite vaporizado e espuma de leite – todos homogeneamente misturados dentro da bebida.
                    Para completar na apresentação, costuma-se polvilhar chocolate em pó ou em pequenos pedaços sobre a bebida'
            ]
        );
        DB::table('cafes')->insert(
            [
                'nome' => 'Affogato',
                'descricao' => 'O affogato é mais uma sobremesa do que um drink, o que o torna especialmente delicioso, Consiste na mistura de uma boa colherada de sorvete de baunilha com uma ou duas doses de café espresso. Muitas pessoas discutem sua presença entre os tipos de café, dizendo que deveria ser considerado um doce.
                    No entanto, uma receita tão deliciosa simplesmente não poderia ficar de fora da lista. Além disso, há uma versão ainda mais animada da bebida que inclui uma dose de licor de amêndoas na mistura.'
            ]
        );
    }
}
