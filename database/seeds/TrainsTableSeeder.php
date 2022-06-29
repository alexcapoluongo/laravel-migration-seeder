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
    
    public function run(Faker $faker) {
            for ($i=0; $i < 10; $i++) { 
                $train = new Train();
                $train->azienda = $faker->name();
                $train->stazione_partenza = $faker->city();
                $train->stazione_arrivo = $faker->city();
                $train->orario_partenza = $faker->numberBetween( 1, 24 );
                $train->orario_arrivo = $faker->numberBetween( 1, 24 );
                $train->codice_treno = 'XW3RL';
                $train->numero_carrozza = 5;
                $train->in_orario = true;
                $train->cancellato = false;
    
                //salva dati nel db
                $train->save();  
        }
    }
}
