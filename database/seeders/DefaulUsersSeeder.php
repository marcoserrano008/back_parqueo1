<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

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
                'ci' => '123321',
                'password' => Hash::make('guardia'),
                'rol' => 'guardia',
                'fechaNacimiento' => Carbon::parse('1990-01-01'),
            ],
            [
                'name' => 'administrador',
                'email' => 'admin@admin.com',
                'apellidoPaterno' => 'apellido',
                'apellidoMaterno' => 'apellido',
                'ci' => '123123',
                'password' => Hash::make('admin'),
                'rol' => 'administrador',
                'fechaNacimiento' => Carbon::parse('1990-01-01'),
            ],
            [
                'name' => 'cliente',
                'email' => 'cliente@cliente.com',
                'apellidoPaterno' => 'apellido',
                'apellidoMaterno' => 'apellido',
                'ci' => '1234567890',
                'password' => Hash::make('cliente'),
                'rol' => 'cliente',
                'fechaNacimiento' => Carbon::parse('1990-01-01'),
            ],


        ]);



    }
}