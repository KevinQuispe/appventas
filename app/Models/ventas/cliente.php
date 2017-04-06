<?php

namespace App\Models\ventas;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    //
    protected $table='cliente';
    protected $primarykey='id';
    public $timestamps=false;
    protected $fillable=[
        'id','Nick','Nombre','Telefono','Direccion'
    ];

    function cliente(){
        $this->belongsto(factura::class);
    }
}
