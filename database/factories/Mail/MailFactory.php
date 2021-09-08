<?php

namespace Database\Factories\Mail;

use App\Models\Mail\Mail;
use Illuminate\Database\Eloquent\Factories\Factory;

class MailFactory extends Factory
{
    protected $model = Mail::class;

    public function definition()
    {
        return [
            'sender' => $this->faker->email(),
            'title' => $this->faker->sentence(),
            'content' => $this->faker->randomHtml(),
        ];
    }
}
