<?php

use Illuminate\Database\Seeder;
use App\Models\Patients;

class PatientsSeeder extends Seeder
{
    public function run()
    {
        Patients::factory(50)->create(); // Generates 50 dummy records
    }
}
