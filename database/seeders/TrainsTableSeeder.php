<?php

namespace Database\Seeders;

use Faker\Generator as Faker;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for($i = 0; $i < 50; $i++){
            $new_train = new Train();
            $new_train->company = $faker->company();
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departure_time = $faker->dateTime();
            $new_train->arrival_time = $faker->dateTimeBetween($new_train->departure_time, $new_train->departure_time->format('Y-m-d H:i:s').'+1 day');
            $new_train->train_code = $faker->bothify('?????-#####');
            $new_train->carriages_number = $faker->numberBetween(1, 20);
            $new_train->in_time = $faker->numberBetween(0, 1);
            $new_train->deleted = $faker->numberBetween(0, 1);
            $new_train->save();
        }
    }
}
