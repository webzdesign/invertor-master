<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\QuotationType;

class QuotationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $types = [
            'Get price',
            'Appointment',
            'Creation'
        ];

        foreach ($types as $type) {
            QuotationType::firstOrCreate(['name' => $type]);
        }
    }
}
