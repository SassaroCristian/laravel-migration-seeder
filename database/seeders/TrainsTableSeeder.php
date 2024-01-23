<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Treno;
use Illuminate\Support\Facades\DB;


class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        // Insert sample data
        DB::table('trains')->insert([
            [
                'azienda' => 'Trenitalia',
                'stazione_partenza' => 'Roma Termini',
                'stazione_arrivo' => 'Milano Centrale',
                'orario_partenza' => '08:00:00',
                'orario_arrivo' => '12:00:00',
                'codice_treno' => '123ABC',
                'numero_carrozze' => 8,
                'in_orario' => true,
                'cancellato' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'azienda' => 'Eurostar',
                'stazione_partenza' => 'Paris Gare du Nord',
                'stazione_arrivo' => 'London St Pancras',
                'orario_partenza' => '10:30:00',
                'orario_arrivo' => '14:30:00',
                'codice_treno' => '456XYZ',
                'numero_carrozze' => 10,
                'in_orario' => true,
                'cancellato' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}


