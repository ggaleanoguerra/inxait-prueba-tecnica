<?php

namespace Database\Factories;

use App\Models\Participant;
use App\Models\Departamento;
use App\Models\Municipio;
use Illuminate\Database\Eloquent\Factories\Factory;

class ParticipantFactory extends Factory
{
    /**
     * The name of the factory’s corresponding model.
     *
     * @var string
     */
    protected $model = Participant::class;

    public function definition(): array
    {
        return [
            'name'                     => $this->faker->firstName,
            'last_name'                => $this->faker->lastName,
            'document_identification'  => $this->faker->unique()->numerify('#########'),
            'email'                    => $this->faker->unique()->safeEmail,
            'phone'                    => $this->faker->numerify('##########'),
            'departamento_id'          => Departamento::inRandomOrder()->first()->id ?? 1,
            'municipio_id'             => Municipio::inRandomOrder()->first()->id ?? 1,
            'data_authorization'       => true,
        ];
    }
}
