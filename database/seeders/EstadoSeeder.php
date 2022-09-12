<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('estados')->truncate();

        \App\Models\Estado::insert([
            ['nome' => 'Acre', 'abreviacao' => 'AC'],
            ['nome' => 'Alagoas', 'abreviacao' => 'AL'],
            ['nome' => 'Amapá', 'abreviacao' => 'AP'],
            ['nome' => 'Amazonas', 'abreviacao' => 'AM'],
            ['nome' => 'Bahia', 'abreviacao' => 'BA'],
            ['nome' => 'Ceará', 'abreviacao' => 'CE'],
            ['nome' => 'Distrito Federal', 'abreviacao' => 'DF'],
            ['nome' => 'Espírito Santo', 'abreviacao' => 'ES'],
            ['nome' => 'Goiás', 'abreviacao' => 'GO'],
            [ 'nome' => 'Maranhão', 'abreviacao' => 'MA'],
            [ 'nome' => 'Mato Grosso', 'abreviacao' => 'MT'],
            [ 'nome' => 'Mato Grosso do Sul', 'abreviacao' => 'MS'],
            [ 'nome' => 'Minas Gerais', 'abreviacao' => 'MG'],
            [ 'nome' => 'Pará', 'abreviacao' => 'PA'],
            [ 'nome' => 'Paraíba', 'abreviacao' => 'PB'],
            [ 'nome' => 'Paraná', 'abreviacao' => 'PR'],
            [ 'nome' => 'Pernambuco', 'abreviacao' => 'PE'],
            [ 'nome' => 'Piauí', 'abreviacao' => 'PI'],
            [ 'nome' => 'Rio de Janeiro', 'abreviacao' => 'RJ'],
            [ 'nome' => 'Rio Grande do Norte', 'abreviacao' => 'RN'],
            [ 'nome' => 'Rio Grande do Sul', 'abreviacao' => 'RS'],
            [ 'nome' => 'Rondônia', 'abreviacao' => 'RO'],
            [ 'nome' => 'Roraima', 'abreviacao' => 'RR'],
            [ 'nome' => 'Santa Catarina', 'abreviacao' => 'SC'],
            [ 'nome' => 'São Paulo', 'abreviacao' => 'SP'],
            [ 'nome' => 'Sergipe', 'abreviacao' => 'SE'],
            [ 'nome' => 'Tocantins', 'abreviacao' => 'TO'],
        ]);
    }
}
