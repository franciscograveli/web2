<?php
require_once('./../helpers/helper.php');

$data = request('POST', ['txtValor1']);

if ($data) {
    $valor1 = intval($data['txtValor1']) ?? 0;
    $resultado = "Valor inválido.\nPor favor, insira um número inteiro maior que zero.";
    if($valor1 == 0 && is_numeric($data['txtValor1'])){
        $valor1 = 1;
    }else if($valor1 > 0){
        for ($i = $valor1 - 1; $i > 0; $i--) {
            $valor1 *= $i;
        }
    }

    $resultado = $valor1 > 0 ? "Fatorial: $valor1" : $resultado;
    header('Location: ./../../app/views/fatorialView.php?resultado=' . urlencode($resultado));
    exit;
} else {
    echo "Dados inválidos ou método de requisição incorreto.";
}

?>