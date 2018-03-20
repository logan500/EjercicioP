<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TurnoTableSeeder::class);
        $this->call(DepartamentosTableSeeder::class);
        $this->call(EmpleadoTableSeeder::class);
    }
}
