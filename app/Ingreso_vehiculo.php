<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingreso_vehiculo extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    
    protected $primaryKey='Id_Ingreso';
    protected $fillable = ['Estado','Vehiculo_Id_Vehiculo','Users_Id'];
     protected $dates =['Fecha_Ingreso'];
    //Relacion con la tabla vehiculo
    
    public function vehiculo(){
        return $this->belongsTo('App\vehiculo');
    }
}
