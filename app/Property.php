<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    //datos que hace una conexión a la bbdd y trabaja con esos datos
    //el id es autoincremental así que no se pone
    protected $fillable=['user_id','direccion','precio','descripcion','tipo','estado','fotografia','visible','m2','created_ad','updated_at'];

    public function user(){
        //modelo user está relacionado con la clave foranea de la tabla properties
        return $this->belongsTo('App\User','user_id');

    }}

