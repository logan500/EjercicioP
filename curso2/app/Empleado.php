<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = [
     	'matricula',
    	'paterno',
    	'materno',
    	'nombre',
    	'fecha_nacimiento',
    	'sexo',
    	'id_departamento',
    	'id_turno'
		];
    
    public function departamento()
    {
    	return $this->belongsTo('App\Departamento');
    }
    public function turno()
    {
    	return $this->belongsTo('App\Turno');
    }

    public function setPaternoAttribute($value)
    {
        $this->attributes['paterno'] = ucfirst(strtolower($value));
    }
    public function setMaternoAttribute($value)
    {
        $this->attributes['materno'] = ucfirst(strtolower($value));
    }
     public function setNombreAttribute($value)
    {
        $this->attributes['nombre'] = ucfirst(strtolower($value));
    }
}
