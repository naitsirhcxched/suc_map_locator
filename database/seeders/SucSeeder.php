<?php

namespace Database\Seeders;

use App\Models\Suc;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Suc::factory()->count(10)->create();
    }
}
