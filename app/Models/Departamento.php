<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = 'departamentos';

    protected $fillable = [
        'name',
        'code',
        'pais_id',
        'created_at',
        'updated_at',
    ];

    public function pais()
    {
        return $this->belongsTo(Pais::class, 'pais_id', 'id');
    }

    public function municipios()
    {
        return $this->hasMany(Municipio::class, 'departamento_id', 'id');
    }
}
