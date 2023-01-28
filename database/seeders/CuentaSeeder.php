<?php

namespace Database\Seeders;

use App\Models\Cuenta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CuentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cuenta::create(['name' => 'BCP']);
        Cuenta::create(['name' => 'Interbank']);
        Cuenta::create(['name' => 'BBVA']);
        Cuenta::create(['name' => 'SCOTIABANK']);
        Cuenta::create(['name' => 'YAPE']);
        Cuenta::create(['name' => 'PLIN']);
    }
}
