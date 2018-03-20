<?php

use Faker\Generator as Faker;

$factory->define(App\Empleado::class, function (Faker $faker) {
    
    $departamentos = App\Departamento::all()->pluck('id')->toArray();
	$turnos = App\Turno::all()->pluck('id')->toArray();

	
	return [
		'matricula' => $faker->unique()->numberBetween($min = 7, $max = 6000),
		'paterno' => $faker->lastName,
		'materno' => $faker->lastName,
		'nombre' => $faker->firstNameMale,
		'fecha_nacimiento' => $faker->date($format = 'Y/m/d', $max = ''),
		'sexo' => $faker->randomElement(['HOMBRE' ,'MUJER']),
		'id_departamento' => $faker->randomElement($departamentos),
		'id_turno' => $faker->randomElement($turnos),
	];

});
