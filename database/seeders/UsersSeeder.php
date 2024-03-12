<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                'rol_id'=>1,
                'name'=>'SuperAdmin',
                'usu_nombre'=>'Andy Peñafiel',
                'usu_telefono'=>'0999999999',
                'email'=>'andypenafielb2@gmail.com',
                'password'=>bcrypt('12345678')
            ]
        );
        DB::table('users')->insert(
            [
                'rol_id'=>2,
                'name'=>'Juan',
                'usu_nombre'=>'Juan Ramirez',
                'usu_telefono'=>'0999999999',
                'email'=>'juanito@gmail.com',
                'password'=>bcrypt('123456789s')
            ]
        );
    }
}
