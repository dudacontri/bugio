<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=> 'Maria Eduarda Contri',
            'email' => 'dudacontri65@gmail.com',
            'password' => Hash::make('password'),
            'cargo'=>'Residente',
            'n_celular'=>'51999999999',
            'faculdade'=> 'IFRS',
            'curso'=> 'APS',
            'semestre'=> 8,

        ]);
    }
}