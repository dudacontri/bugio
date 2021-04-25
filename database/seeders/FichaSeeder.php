<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FichaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fichas')->insert([
            'n_hcv' => 1820,
            'n_pre' => 210,
            'id_propria' => 'Microchip',
            'n_id' => 14589652,
            'apelido' => 'Benício',
            'nome_comum' => "Bugio ruivo",
            'nome_cientifico'=> 'Alouatta guariba',
            'n_individuos'=> 1,
            'classe' => 'Mamifero',
            'sexo' => 'Masculino',
            'faixa_etaria' => 'Adulto',
            'peso' => 6,
            'historico' => 'Eletrocussão na reserva do Iami em 2016',
            'data_entrada' => Carbon::now(),
            'tipo_de_caso' => 'Novo',
            'conflito' => 'Eletrocussão',
            'origem' => 'Vida livre',
            'local_origem' => 'Reserva do Iami, Porto Alegre Rio Grande do Sul',
            'quem_trouxe' => 'Secretaria Municipal do Meio Ambiente de Porto Alegre',
            'user_id' => 1,
            'sinais_clinicos' => 'Lesões compatíveis com eletrocussao em membros torácicos e cauda',
            'medicacoes' => 'Soro antitetânico, antibioticoterapia, analgesia e limpeza das feridas',
            'procedimentos' =>  'Sedação para debridamento das feridas',
            'exames' => 'Coleta de sangue e Raio X',
            'data_saida' => new Carbon('2020-12-28 11:00:00'),
            'n_doc_saida' => 458947,
            'destino' => 'Reserva do Iami, Porto Alegre',
            'motivo_saida' => 'Destinação',
            'responsavel_entrega' => 'Flávia Silva',
            'diag_final' => 'Eletrocussão',

        ]);
    }
}
