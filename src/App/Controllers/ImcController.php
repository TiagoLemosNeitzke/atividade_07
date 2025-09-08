<?php

namespace TiagoPopOs\Php\App\Controllers;

use TiagoPopOs\Php\App\Models\Imc;

class ImcController
{
    private float|null $result = null;
    private string|null $classification = null;

    private string|null $cssClass = null;

    public function calculate(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $weight = (float) ($_POST['weight'] ?? 0);
            $height = (float) ($_POST['height'] ?? 0);

            if ($weight > 0 && $height > 0) {
                $imc = new Imc($weight, $height);
                $this->result = $imc->calculate();
                $this->classification = $imc->classification($this->result);
                $this->cssClass = $imc->getCssClass($this->result);
            }
        }
    }

    public function render(): void
    {
        $resultado = $this->result;
        $classificacao = $this->classification;
        $cssClass = $this->cssClass;
        require __DIR__ . '/../Views/imc-form.php';
    }
}