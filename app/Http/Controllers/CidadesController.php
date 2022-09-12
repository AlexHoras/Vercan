<?php

namespace App\Http\Controllers;

use App\Models\Cidade;
use App\Models\Estado;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class CidadesController extends Controller
{
    public function show($nome_estado)
    {
        $estado = Estado::where('abreviacao', $nome_estado)->get('id');
        $cidades = Cidade::where('estados_id', $estado[0]->id)->get();
        return response()->json($cidades);
    }
}
