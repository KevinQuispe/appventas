<?php

namespace App\Models\ventas;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    //
    protected $table='producto';
    protected $primarykey='id';
    public $timestamps=false;
    protected $fillable=[
        'id','Descripcion','idProveedor','PrecioCosto','PrecioVenta','Foto'
    ];

    function detalleFacturaProducto(){
        $this->belongsto(detalleFactura::class);
    }

    function producto(){
        $this->hasmany(proveedor::class);
    }
}
