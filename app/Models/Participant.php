<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Participant extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'last_name',
        'document_identification',
        'email',
        'phone',
        'departamento_id',
        'municipio_id',
        'data_authorization',
    ];
    public function lotteries()
    {
        return $this->belongsToMany(Lottery::class, 'lottery_participants');
    }

    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }
    public function municipio()
    {
        return $this->belongsTo(Municipio::class);
    }
}
