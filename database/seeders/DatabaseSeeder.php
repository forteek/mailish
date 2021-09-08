<?php

namespace Database\Seeders;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            MailSeeder::class,
        ]);
    }
}
