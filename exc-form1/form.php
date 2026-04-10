<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        padding: 20px;
        margin: auto;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    form {
        display: flex;
        flex-direction: column;
        width: 200px;
        margin: 0 auto;
    }

    label {
        margin-top: 10px;
    }

    button {
        margin-top: 20px;
        padding: .5rem 1rem;
        background-color: #007BFF;
    }
</style>
<body>
    <form action="actions/calcule-media.php" method="post">
        <label for="nota1">Nota 1:</label>
        <input type="number" name="nota1" id="nota1" step="0.01" required><br>

        <label for="nota2">Nota 2:</label>
        <input type="number" name="nota2" id="nota2" step="0.01" required><br>

        <button type="submit">Calcular Média</button>
    </form>
</body>
</html>