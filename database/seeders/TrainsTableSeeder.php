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
            [
                'azienda' => 'Frecciarossa',
                'stazione_partenza' => 'Napoli Centrale',
                'stazione_arrivo' => 'Firenze Santa Maria Novella',
                'orario_partenza' => '09:15:00',
                'orario_arrivo' => '11:30:00',
                'codice_treno' => '789XYZ',
                'numero_carrozze' => 12,
                'in_orario' => true,
                'cancellato' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'azienda' => 'Thalys',
                'stazione_partenza' => 'Brussels Midi',
                'stazione_arrivo' => 'Amsterdam Centraal',
                'orario_partenza' => '11:45:00',
                'orario_arrivo' => '14:15:00',
                'codice_treno' => '234ABC',
                'numero_carrozze' => 9,
                'in_orario' => true,
                'cancellato' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'azienda' => 'ICE',
                'stazione_partenza' => 'Berlin Hauptbahnhof',
                'stazione_arrivo' => 'Munich Hauptbahnhof',
                'orario_partenza' => '08:45:00',
                'orario_arrivo' => '12:30:00',
                'codice_treno' => '567DEF',
                'numero_carrozze' => 6,
                'in_orario' => true,
                'cancellato' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'azienda' => 'Renfe',
                'stazione_partenza' => 'Madrid Puerta de Atocha',
                'stazione_arrivo' => 'Barcelona Sants',
                'orario_partenza' => '09:00:00',
                'orario_arrivo' => '12:45:00',
                'codice_treno' => '890XYZ',
                'numero_carrozze' => 7,
                'in_orario' => true,
                'cancellato' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'azienda' => 'Shinkansen',
                'stazione_partenza' => 'Tokyo Station',
                'stazione_arrivo' => 'Osaka Station',
                'orario_partenza' => '13:15:00',
                'orario_arrivo' => '15:30:00',
                'codice_treno' => '123XYZ',
                'numero_carrozze' => 9,
                'in_orario' => true,
                'cancellato' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}


