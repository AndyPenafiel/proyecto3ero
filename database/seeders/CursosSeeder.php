<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class CursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cursos')->insert(
            [
                'cur_id'=>1,
                'cur_titulo'=>'Informatica',
                'cur_descripcion'=>'Todo sobre el mundo de la informatica',
                'cur_grupo'=>'Grupo Tercero'
            ]
        );
        DB::table('cursos')->insert(
            [
                'cur_id'=>2,
                'cur_titulo'=>'Pasteleria',
                'cur_descripcion'=>'Todo sobre el mundo de la Pasteleria',
                'cur_grupo'=>'Grupo Segundo'
            ]
        );
        DB::table('cursos')->insert(
            [
                'cur_id'=>3,
                'cur_titulo'=>'Musica',
                'cur_descripcion'=>'Todo sobre el mundo de la Musica',
                'cur_grupo'=>'Grupo Octavo'
            ]
        );
        DB::table('cursos')->insert(
            [
                'cur_id'=>4,
                'cur_titulo'=>'Matematica',
                'cur_descripcion'=>'Todo sobre el mundo de la Matematica',
                'cur_grupo'=>'Grupo Primero'
            ]
        );
    }
}
