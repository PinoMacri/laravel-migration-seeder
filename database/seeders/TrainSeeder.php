<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator;

class TrainSeeder extends Seeder
{
    public function run(Generator $faker): void
    {
        for ($i=0; $i<5;$i++){
            $train=new Train();
            $train->azienda=$faker->word();
            $train->stazione_partenza=$faker->city();
            $train->stazione_arrivo=$faker->city();
            $train->orario_partenza=$faker->time();
            $train->orario_arrivo=$faker->time();
            $train->codice_treno=$faker->ean8();
            $train->numero_carrozze=$faker->randomNumber(1, false);
            $train->in_orario=$faker->boolean();
            $train->cancellato=$faker->boolean();
$train->save();
        }
    }
}