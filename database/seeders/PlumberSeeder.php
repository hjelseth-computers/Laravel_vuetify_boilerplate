<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Plumber;
use App\Models\Referral;
use Illuminate\Database\Seeder;

class PlumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Plumber::factory(4)
            ->has(Client::factory()->count(1), 'clients')
            ->create();
    }
}
