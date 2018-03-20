<?php

use Faker\Generator as Faker;

$factory->define(App\Departamento::class, function (Faker $faker) {
    return [
        'codigo' => $faker->bothify('?###'),
        'descripcion' => $faker->sentence(10)
    ];
});
