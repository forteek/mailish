<?php

namespace Database\Factories\Mail;

use App\Models\Mail\Opening;
use Illuminate\Database\Eloquent\Factories\Factory;

class OpeningFactory extends Factory
{
    protected $model = Opening::class;

    public function definition()
    {
        return [
            'user_agent' => $this->faker->userAgent(),
        ];
    }
}
