<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Student;

class FakerStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 30 ; $i++) { 
            $newStudent = new Student();
            $newStudent->nome = $faker->firstName();
            $newStudent->cognome = $faker->lastName();
            $newStudent->classe = $faker->numberBetween(1, 5);
            $newStudent->save();
        }
    }
}
