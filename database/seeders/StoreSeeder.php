<?php

namespace Database\Seeders;

use App\Models\Store as StoreModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StoreModel::factory()
        ->count(10)
        ->create();
    }
}
