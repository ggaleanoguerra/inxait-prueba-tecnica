<?php

namespace App\Exports;

use App\Models\Participant;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class AllParticipantsExport implements FromView
{
    public $participants;

    public function __construct($participants)
    {
        $this->participants = $participants;
    }

    public function view(): View
    {
        return view('exports.participants-all', [
            'participants' => $this->participants,
        ]);
    }
}
