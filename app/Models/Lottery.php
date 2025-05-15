<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lottery extends Model
{
    protected $fillable = [
        'name',
        'description',
        'active',
    ];

    public function participants()
    {
        return $this->belongsToMany(Participant::class, 'lottery_participants');
    }
}
