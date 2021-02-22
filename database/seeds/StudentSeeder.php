<?php

use Illuminate\Database\Seeder;
use app\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listaStudenti = [
            [
                'nome' => 'Ania',
                'cognome' => 'Rossi',
                'classe' => 4
            ],
            [
                'nome' => 'Mario',
                'cognome' => 'Verdi',
                'classe' => 5
            ],
            [
                'nome' => 'Vico',
                'cognome' => 'Bianchi',
                'classe' => 1
            ],
            [
                'nome' => 'Giulio',
                'cognome' => 'Cesare',
                'classe' => 1
            ],
            [
                'nome' => 'Marta',
                'cognome' => 'Neri',
                'classe' => 3
            ]
        ];

        foreach ($listaStudenti as $studente){
            $newStudent = new Student();
            $newStudent->nome = $studente['nome'];
            $newStudent->cognome = $studente['cognome'];
            $newStudent->classe = $studente['classe'];
            $newStudent->save();
        }
    }
}
