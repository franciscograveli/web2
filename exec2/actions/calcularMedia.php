<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
</head>
<body>
    <style>
    body{
        margin: 0;
        padding: 0;
        justify-content: center;
        align-items: center;
        display: flex;
        height: 100dvh;
    }
    </style>
    <div>
        <?php 
            $teste = "";
            if(isset($teste)) {
                echo "A variável teste existe <br>";
            }
            $n1 = $_GET["txtNota1"] ? $_GET["txtNota1"] : 0;
            $n2 = $_GET["txtNota2"] ? $_GET["txtNota2"] : 0;
            $n3 = $_GET["txtNota3"] ? $_GET["txtNota3"] : 0;

            $media = ($n1 + $n2 + $n3) / 3;
            $color = $media >= 6 ? "green" : "red";

            echo "Primeira nota: $n1 <br>";
            echo "Segunda nota: $n2 <br>";
            echo "Terceira nota: $n3 <br>";
            echo "<p style='color: $color'>Média: $media </p><br>";
        ?>
    </div>
</body>
</html>