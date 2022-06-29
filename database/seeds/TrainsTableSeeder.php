<?php

use App\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

use function Ramsey\Uuid\v1;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $train = new Train();
        $train->azienda = $faker->name();
        $train->stazione_partenza = 'Milano Centrale';
        $train->stazione_arrivo = 'Firenza SMN';
        $train->orario_partenza = '15:00';
        $train->orario_arrivo = '19:00';
        $train->codice_treno = 'XW3RL';
        $train->numero_carrozza = 5;
        $train->in_orario = true;
        $train->cancellato = false;

        //salva dati nel db
        $train->save();
        
    }
}
