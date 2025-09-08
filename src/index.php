<?php
require __DIR__ . '/../vendor/autoload.php';

use TiagoPopOs\Php\App\ImcCalculator;

$resultado = null;
$classificacao = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $peso = (float) $_POST['peso'];
    $altura = (float) $_POST['altura'];

    $calculator = new ImcCalculator();
    $resultado = $calculator->calcular($peso, $altura);
    $classificacao = $calculator->classificar($resultado);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de IMC</title>
</head>
<body>
<h1>Calcule seu IMC</h1>
<form method="post" action="">
    <label for="peso">Peso (kg):</label>
    <input type="number" step="0.1" name="peso" id="peso" required>
    <br><br>

    <label for="altura">Altura (m):</label>
    <input type="number" step="0.01" name="altura" id="altura" required>
    <br><br>

    <button type="submit">Calcular</button>
</form>

<?php if ($resultado !== null): ?>
    <h2>Resultado</h2>
    <p>Seu IMC é: <strong><?= number_format($resultado, 2, ',', '.') ?></strong></p>
    <p>Classificação: <strong><?= $classificacao ?></strong></p>
<?php endif; ?>
</body>
</html>
