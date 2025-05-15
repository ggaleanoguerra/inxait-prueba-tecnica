<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table = 'paises';

    protected $fillable = [
        'code',
        'name',
        'created_at',
        'updated_at',
    ];

    public function departamentos()
    {
        return $this->hasMany(Departamento::class, 'pais_id', 'id');
    }
}
