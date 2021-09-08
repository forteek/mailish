<?php

namespace Database\Factories\Mail;

use App\Models\Mail\Opening;
use App\Models\Mail\Recipient;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecipientFactory extends Factory
{
    protected $model = Recipient::class;

    public function definition()
    {
        return [
            'email' => $this->faker->email(),
            'name' => $this->faker->optional()->name(),
        ];
    }
}
