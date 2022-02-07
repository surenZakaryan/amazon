<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,12) as $index){
            DB::table('Users')->insert([
                'name'=>$faker->text(20),
                'email'=>$faker->email(20),
                'password'=>$faker->password($min = 4, $max = 13),
                'role_id'=>$faker->numberBetween($min = 1, $max = 3),
            ]);
        }
    }
}
