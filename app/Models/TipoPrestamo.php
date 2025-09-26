<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoPrestamo extends Model
{
    protected $table = 'tipo_prestamo';
    protected $fillable = [
        'nombre',
        'descripcion',
        'interes'
    ];

    public function prestamos ()
    {
        return $this->hasMany(Prestamos::class,'idTipoPrestamo');
    }
}
