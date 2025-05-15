<?php

namespace App\Exports;

use App\Models\LotteryParticipant;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ParticipantsExport implements FromView
{
    public $participants;
    public $lottery;

    public function __construct($participants, $lottery)
    {
        $this->participants = $participants;
        $this->lottery = $lottery;
    }

    public function view(): View
    {
        return view('exports.participants', [
            'participants' => $this->participants,
            'lottery' => $this->lottery,
        ]);
    }
}
