<?php

use App\Student;
use Illuminate\Database\Seeder;

class ConfigStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $configListaStudenti = config('student');
        
        foreach ($configListaStudenti as $configStudente){
            $newStudent = new Student();
            $newStudent->nome = $configStudente['nome'];
            $newStudent->cognome = $configStudente['cognome'];
            $newStudent->classe = $configStudente['classe'];
            $newStudent->save();
        }
    }
}
