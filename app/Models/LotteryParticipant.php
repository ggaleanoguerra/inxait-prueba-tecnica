<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LotteryParticipant extends Model
{
    use HasFactory;
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
