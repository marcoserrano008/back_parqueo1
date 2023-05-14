<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DefaulUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([

            [
                'name' => 'guardia',
                'email' => 'guardia@guardia.com',
                'apellidoPaterno' => 'apellido',
                'apellidoMaterno' => 'apellido',
                'ci' => '1234567890',
                'password' => Hash::make('guardia'),
                'rol' => 'guardia',
            ],
            [
                'name' => 'administrador',
                'email' => 'admin@admin.com',
                'apellidoPaterno' => 'apellido',
                'apellidoMaterno' => 'apellido',
                'ci' => '1234567890',
                'password' => Hash::make('admin'),
                'rol' => 'administrador',
            ],
            [
                'name' => 'cliente',
                'email' => 'cliente@cliente.com',
                'apellidoPaterno' => 'apellido',
                'apellidoMaterno' => 'apellido',
                'ci' => '1234567890',
                'password' => Hash::make('cliente'),
                'rol' => 'cliente',
            ],


        ]);



    }
}