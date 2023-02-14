<?php

namespace Database\Seeders;

use Database\Factories\KataFactory;
use Illuminate\Database\Seeder;

class KataSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $this->call(KataFactory::class);
    }
}