<?php
require_once('./../helpers/helper.php');

$data = request('POST', ['txtValor1', 'txtValor2', 'sltOperacao']);

if ($data) {
    $valor1 = floatval($data['txtValor1']);
    $valor2 = floatval($data['txtValor2']);
    $operacao = $data['sltOperacao'];

    switch ($operacao) {
        case 'somar':
            $resultado = $valor1 + $valor2;
            break;
        case 'subtrair':
            $resultado = $valor1 - $valor2;
            break;
        case 'multiplicar':
            $resultado = $valor1 * $valor2;
            break;
        case 'dividir':
            if ($valor2 != 0) {
                $resultado = $valor1 / $valor2;
            } else {
                $resultado = 'Erro: Divisão por zero';
            }
            break;
        default:
            $resultado = 'Operação inválida';
    }
    header('Location: ./../../app/views/calculadoraView.php?resultado=' . urlencode($resultado) . '&txtValor1=' . urlencode($data['txtValor1']) . '&txtValor2=' . urlencode($data['txtValor2']) . '&sltOperacao=' . urlencode($data['sltOperacao']));
exit;
} else {
    echo "Dados inválidos ou método de requisição incorreto.";
}

?>