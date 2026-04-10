<?php
require_once('./../helpers/helper.php');

$data = request('POST', ['txtValor1', 'txtValor2']);

if ($data) {
    $valor1 = intval($data['txtValor1']);
    $valor2 = intval($data['txtValor2']);

    $divisaoInteira = intdiv($valor1, $valor2);
    $restoDaDivisao = $valor1 % $valor2;

    $resultado = "Divisão inteira: $divisaoInteira\n Resto da divisão: $restoDaDivisao";
    
    header('Location: ./../../app/views/divisaoInteiraView.php?resultado=' . urlencode($resultado) . '&txtValor1=' . urlencode($data['txtValor1']) . '&txtValor2=' . urlencode($data['txtValor2']));
exit;
} else {
    echo "Dados inválidos ou método de requisição incorreto.";
}

?>