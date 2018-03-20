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
        $User = array(
        	['nombreTurno' => 'MATUTINO'],
        	['nombreTurno' => 'VESPERTINO'],
        	['nombreTurno' => 'NOCTURNO'],
        	['nombreTurno' => 'JORNADA ACUMULADA'],
        	['nombreTurno' => 'ESPECIALES'],
        	['nombreTurno' => 'SABADO'],
        	['nombreTurno' => 'DOMINGO'],
        	['nombreTurno' => '24 X 24'],
        );

        foreach ($turnos as $turno) {
        	Turno::create($turno);
        }
    }
}
