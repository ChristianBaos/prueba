<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class vehiculo extends Model
{
    public $timestamps = false;
    protected $fillable = ['placa', 'tipo', 'modelo'];

    //Relacion con la tabla Ingreso_vehiculo

    public function ingreso_vehiculo()
    {
        return $this->hasManythrough(Ticket::class, Ingreso_Vehiculo::class);
    }
}
