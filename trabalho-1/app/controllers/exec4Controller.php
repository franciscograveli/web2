<?php
require_once('./../helpers/helper.php');

$data = request('POST', ['txtValor1']);

if ($data) {
    $valor1 = intval($data['txtValor1']) ?? 0;
    if($valor1 == 0){
        $valor1 = 1;
    }else{
        for ($i = $valor1 - 1; $i > 0; $i--) {
            $valor1 *= $i;
        }
    }

    $resultado = $valor1;
    header('Location: ./../../app/views/fatorialView.php?resultado=' . urlencode($resultado));
exit;
} else {
    echo "Dados inválidos ou método de requisição incorreto.";
}

?>