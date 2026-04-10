<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../../assets/css/style.css">
    <title>Fatorial</title>
</head>
<body>
     <div class="HeaderSection">
            <a href="./../../">
                <img src="./../../assets/icons/home.svg" alt="Home Icon" class="HomeIcon">
            </a>
        </div>
    <section> 
        <?php
        if (isset($_GET['resultado'])) {
            ?>
            <div class="Result">
                <h2>Resultado: <?php echo htmlspecialchars($_GET['resultado']); ?></h2>
            </div>
        <?php
        }
        ?>
        <form action="./../../app/controllers/exec4Controller.php" method="post">
            <input type="text" name="txtValor1" id="txtValor1" placeholder="Valor 1" required <?php if (isset($_GET['txtValor1'])) { echo 'value="' . htmlspecialchars($_GET['txtValor1']) . '"'; } ?>>
            <button type="submit">Calcular</button>
        </form>
    </section>
</body>
</html>