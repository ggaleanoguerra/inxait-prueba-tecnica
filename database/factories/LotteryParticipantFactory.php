<?php

namespace Database\Factories;

use App\Models\LotteryParticipant;
use App\Models\Participant;
use App\Models\Lottery;

use Illuminate\Database\Eloquent\Factories\Factory;

class LotteryParticipantFactory extends Factory
{
    protected $model = LotteryParticipant::class;

    public function definition(): array
    {
        return [
            'participant_id' => Participant::inRandomOrder()->first()->id ?? Participant::factory(),
            'lottery_id'     => Lottery::inRandomOrder()->first()->id     ?? Lottery::factory(),
        ];
    }
}
