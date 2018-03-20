<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Turno extends Model
{
	// use SoftDeletes;
 //    protected $dates = ['deleted_at'];

    protected $table = 'cat_turnos';
    protected $fillabe = ['nombreTurno'];


    public function empleados(){
    	return $this->hasMany('App\Empleados','id_turno','id');
    }
    public function setNombreTurnoAttribute($value){
    	$this->attributes['nombreTurno'] = mb_strtoupper($value,'utf8');
    }
}
