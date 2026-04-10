<?php
require_once('./../helpers/helper.php');

$data = request('POST', ['txtValor1', 'txtValor2']);

if ($data) {
    $valor1 = intval($data['txtValor1']);
    $valor2 = intval($data['txtValor2']);
    $resultado = "Erro: Divisão por zero";

    if ($valor2 != 0) {
        $divisaoInteira = 0;
        $restoDaDivisao = $valor1;
    
        while ($restoDaDivisao >= $valor2) {
            $restoDaDivisao -= $valor2;
            $divisaoInteira++;
        }
    
        $resultado = "Divisão inteira: $divisaoInteira\nResto da divisão: $restoDaDivisao";
    }


    header('Location: ./../../app/views/divisaoInteiraView.php?resultado=' . urlencode($resultado) . '&txtValor1=' . urlencode($data['txtValor1']) . '&txtValor2=' . urlencode($data['txtValor2']));
    exit;

} else {
    echo "Dados inválidos ou método de requisição incorreto.";
}
?>