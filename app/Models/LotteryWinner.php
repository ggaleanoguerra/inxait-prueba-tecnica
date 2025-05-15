<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LotteryWinner extends Model
{

    protected $fillable = [
        'lottery_id',
        'participant_id',

    ];

    public function lottery()
    {
        return $this->belongsTo(Lottery::class);
    }

    public function participant()
    {
        return $this->belongsTo(Participant::class);
    }


}
