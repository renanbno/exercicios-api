<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExercicioFromRequest;
use Illuminate\Http\Request;

class ExercicioUm extends Controller
{
    public function multiplicar(ExercicioFromRequest $request){
        $primeiraEntrada = $request->primeiro_numero;
        $segundaEntrada = $request->segundo_numero;   

        return json_encode([
            'resultado' => $primeiraEntrada * $segundaEntrada
        ]); 
}
}
