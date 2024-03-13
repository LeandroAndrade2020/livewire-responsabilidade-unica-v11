<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EstagiariosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('estagiarios')->delete();

        \DB::table('estagiarios')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Sandra Aparecida Rodrigues',
                'cpf' => '464.214.578-86',
                'telefone' => '99 99999-9999',
                'bairro' => 'Morro do Algodão',
                'curso' => 1,
                'periodo' => 4,
                'inicio_contrato' => '2024-03-12',
                'fim_contrato' => '2024-03-19',
                'escola_id' => 7,
                'status' => 2,
                'created_at' => '2024-03-12 10:00:17',
                'updated_at' => '2024-03-12 10:45:44',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Miguel Silvestre dos Santos ',
                'cpf' => '464.214.578-86',
            'telefone' => '(12) 98802-7836',
                'bairro' => 'Perequê Mirim',
                'curso' => 2,
                'periodo' => 3,
                'inicio_contrato' => '2024-03-12',
                'fim_contrato' => '2024-03-19',
                'escola_id' => 12,
                'status' => 1,
                'created_at' => '2024-03-12 10:19:21',
                'updated_at' => '2024-03-12 10:19:21',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Fernando Cardoso Gomes',
                'cpf' => '781.889.241-99',
                'telefone' => '55 55555-5555',
                'bairro' => 'Massaguaçu',
                'curso' => 7,
                'periodo' => 1,
                'inicio_contrato' => '2024-03-19',
                'fim_contrato' => '2024-03-26',
                'escola_id' => 48,
                'status' => 1,
                'created_at' => '2024-03-12 10:26:50',
                'updated_at' => '2024-03-12 10:44:05',
                'deleted_at' => NULL,
            ),
        ));


    }
}
