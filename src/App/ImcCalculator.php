<?php

namespace TiagoPopOs\Php\App;

class ImcCalculator
{
    public function calcular(float $peso, float $altura): float
    {
        return $peso / ($altura * $altura);
    }

    public function classificar(float $imc): string
    {
        if ($imc < 18.5) {
            return "Abaixo do peso";
        } elseif ($imc < 24.9) {
            return "Peso normal";
        } elseif ($imc < 29.9) {
            return "Sobrepeso";
        }

        return "Obesidade";
    }
}