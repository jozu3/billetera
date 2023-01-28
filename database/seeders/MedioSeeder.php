<?php

namespace Database\Seeders;

use App\Models\Medio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Medio:: create([
            'name' => 'Whatsapp'
        ]);

        Medio:: create([
            'name' => 'Telegram'
        ]);
    }
}
