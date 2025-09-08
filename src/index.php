<?php
require __DIR__ . '/../vendor/autoload.php';

use TiagoPopOs\Php\App\Controllers\ImcController;

$controller = new ImcController();
$controller->calculate();
$controller->render();
