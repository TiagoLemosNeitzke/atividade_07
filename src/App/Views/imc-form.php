<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de IMC</title>
    <link rel="stylesheet" href="App/Views/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:wght@400;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>Calcule seu IMC</h1>
    <form method="post" action="index.php">
        <label for="weight">Peso (kg):</label>
        <input type="number" step="0.1" name="weight" id="weight" required>
        <br><br>

        <label for="height">Altura (m):</label>
        <input type="number" step="0.01" name="height" id="height" required>
        <br><br>

        <button type="submit">Calcular</button>
    </form>

   <?php if (isset($resultado) && $resultado !== null): ?>
    <div class="result">
        <h2>Resultado</h2>
        <p class="imc">Seu IMC é: <strong><?= number_format($resultado, 2, ',', '.') ?></strong></p>
        <p class="classification <?= $cssClass ?>">Classificação: <strong><?= $classificacao ?></strong></p>
    </div>
    <?php endif; ?>

</div>
</body>
</html>

