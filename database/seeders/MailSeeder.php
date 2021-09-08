<?php

namespace Database\Seeders;

use App\Models\Mail\Mail;
use App\Models\Mail\Opening;
use App\Models\Mail\Recipient;

class MailSeeder extends Seeder
{
    public function run()
    {
        Mail::factory(20)
            ->has(Recipient::factory($this->faker->numberBetween(1, 5)))
            ->has(Opening::factory($this->faker->numberBetween(0, 10)))
            ->create()
        ;
    }
}
