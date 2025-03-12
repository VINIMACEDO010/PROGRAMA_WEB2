<?php

// Autoload do Composer
require_once 'vendor/autoload.php';

// Criar uma instância do Faker
$faker = Faker\Factory::create('pt_BR');
$faker->addProvider(new Faker\Provider\pt_BR\Text($faker));
// Gerar dados falsos
echo "Nome: " . $faker->name() . "<br>";
echo "Endereço: " . $faker->address() . "<br>";
echo "Email: " . $faker->email() . "<br>";
echo "Texto: " . $faker->realText(500) . "<br>";



// para rodar esse código acima e necessário rodar o seguinte comando no terminal - php faker.php''

?> 

