<?php
require_once('./../helpers/helper.php');

$data = request('POST', ['txtValor1']);

if ($data) {
    $valor1 = intval($data['txtValor1']) ?? 0;
    $resultado = "Valor inválido.\nPor favor, insira um número inteiro maior que zero.";
    $divisores = [];
    if($valor1 == 0 && is_numeric($data['txtValor1'])){
        $resultado = "0 não tem divisores.";
    }else if($valor1 > 0){
        for ($i = $valor1; $i > 0; $i--) {
            if($valor1 % $i == 0){
                $divisores[] = $i;
            }
        }
        $resultado = implode(', ', $divisores);
    }

    header('Location: ./../../app/views/todosDivisoresView.php?resultado=' . urlencode($resultado));
exit;
} else {
    echo "Dados inválidos ou método de requisição incorreto.";
}

?>