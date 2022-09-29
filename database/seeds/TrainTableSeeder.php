<?php

use Illuminate\Database\Seeder;
use App\Train;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = \Faker\Factory::create('it_IT');

        for($i=0; $i<100; $i++){

            $newTrain = new Train();

            $newTrain->azienda = '';
            $newTrain->stazione_partenza = $faker->city();
            $newTrain->stazione_arrivo = $faker->city();
            $newTrain->orario_partenza = $faker->time();
            $newTrain->orario_arrivo = $faker->time();
            $newTrain->data_partenza = $faker->dateTimeInInterval('-1 week', '+20 days');
            $newTrain->codice_treno = $faker->randomLetter() . $faker->numberBetween(10000, 99999);
            $newTrain->numero_carrozze = $faker->numberBetween(0, 9);
            $newTrain->in_orario = '0';
            $newTrain->cancellato = '1';

            $newTrain->save();
        }

    }
}
