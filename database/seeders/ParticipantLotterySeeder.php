<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Participant;
use App\Models\LotteryParticipant;

class ParticipantLotterySeeder extends Seeder
{
    public function run(): void
    {
        Participant::factory(4)->create()->each(function ($participant) {
            LotteryParticipant::factory(1)->create([
                'participant_id' => $participant->id,
            ]);
        });
    }
}
