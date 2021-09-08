<?php

namespace Database\Seeders;

use Faker\Generator;
use Illuminate\Database\Seeder as BaseSeeder;

class Seeder extends BaseSeeder
{
    public function __construct(
        protected Generator $faker
    ) {}
}
