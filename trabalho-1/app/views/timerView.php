<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../../assets/css/style.css">
    <link rel="stylesheet" href="./../../assets/css/custom.css">
    <title>Calculadora</title>
</head>
<body>
    <?php
            date_default_timezone_set('America/Sao_Paulo');
            $hora = date('H');
            $mensagem = "Bom Dia!!";
            $class = "bomdia";
            if ($hora >= 12 && $hora < 18) {
                $mensagem = "Boa Tarde!!";
                $class = "boatarde";
            } elseif ($hora >= 18 || $hora < 6) {
                $mensagem = "Boa Noite!!";
                $class = "boanoite";
            }
            ?>
             <div class="HeaderSection <?php echo $class; ?>">
            <a href="./../../">
                <img src="./../../assets/icons/home.svg" alt="Home Icon" class="HomeIcon">
            </a>
        </div>
    <section class="<?php if($class) echo $class . '-section'; else echo 'bomdia-section';?>">
        <div class="corpoCeleste <?php echo $class . '-celeste' ; ?>"></div>
        <div class="buble"></div>
        <div class="buble" style="top:250px; left:-45vw"></div>
        <div class="buble" style="top:250px; left:-25vw"></div>
        <div class="buble" style="top:300px; left:-35vw"></div>
        <div class="<?php echo $class; ?> Result">
            <h1 class="<?php echo $class; ?>"><?php echo $mensagem; ?></h1>
        </div>
    </section>
</body>
</html>