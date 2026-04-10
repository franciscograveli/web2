<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../../assets/css/style.css">
    <title>Calculadora</title>
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
        <form action="./../../app/controllers/exec1Controller.php" method="post">
            <input type="text" name="txtValor1" id="txtValor1" placeholder="Valor 1" required <?php if (isset($_GET['txtValor1'])) { echo 'value="' . htmlspecialchars($_GET['txtValor1']) . '"'; } ?>>
            <input type="text" name="txtValor2" id="txtValor2" placeholder="Valor 2" required <?php if (isset($_GET['txtValor2'])) { echo 'value="' . htmlspecialchars($_GET['txtValor2']) . '"'; } ?>>
            <select name="sltOperacao" id="sltOperacao">
                <option value="somar" <?php if (isset($_GET['sltOperacao']) && $_GET['sltOperacao'] === 'somar') { echo 'selected'; } ?>>Somar</option>
                <option value="subtrair" <?php if (isset($_GET['sltOperacao']) && $_GET['sltOperacao'] === 'subtrair') { echo 'selected'; } ?>>Subtrair</option>
                <option value="multiplicar" <?php if (isset($_GET['sltOperacao']) && $_GET['sltOperacao'] === 'multiplicar') { echo 'selected'; } ?>>Multiplicar</option>
                <option value="dividir" <?php if (isset($_GET['sltOperacao']) && $_GET['sltOperacao'] === 'dividir') { echo 'selected'; } ?>>Dividir</option>
            </select>
            <button type="submit">Calcular</button>
        </form>
    </section>
</body>
</html>