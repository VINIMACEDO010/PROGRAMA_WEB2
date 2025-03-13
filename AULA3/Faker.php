<?php


require_once 'vendor/autoload.php';


$faker = Faker\Factory::create('pt_BR');
$faker->addProvider(new Faker\Provider\pt_BR\Text($faker));

echo "Nome: " . $faker->name() . "<br>";
echo "Endereço: " . $faker->address() . "<br>";
echo "Email: " . $faker->email() . "<br>";
echo "Texto: " . $faker->realText(500) . "<br>";

// rodar o comando no terminal - php faker.php''

?> 

