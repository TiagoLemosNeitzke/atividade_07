<?php

namespace TiagoPopOs\Php\App\Models;

readonly class Imc
{
    public function __construct(private float $weight, private float $height)
    {
    }

    public function calculate(): float
    {
        return $this->weight / ($this->height * $this->height);
    }

    public function classification(float $imc): string
    {
        if ($imc < 18.5) {
            return "Abaixo do peso";
        }

        if ($imc >= 18.5 && $imc <= 24.9) {
            return "Peso adequado";
        }

        if ($imc >= 25 && $imc <= 29.9) {
            return "Sobrepeso";
        }

        if ($imc >= 30 && $imc <= 34.9) {
            return "Obesidade grau I";
        }

        if ($imc >= 35 && $imc <= 39.9) {
            return "Obesidade grau II";
        }

        // IMC >= 40
        return "Obesidade grau III";
    }

    public function getCssClass(float $imc): string
    {
        if ($imc < 18.5) return 'underweight';       // Abaixo do peso
        if ($imc >= 18.5 && $imc <= 24.9) return 'normal';  // Peso adequado
        if ($imc >= 25 && $imc <= 29.9) return 'overweight'; // Sobrepeso
        if ($imc >= 30 && $imc <= 34.9) return 'obesity1';   // Obesidade I
        if ($imc >= 35 && $imc <= 39.9) return 'obesity2';   // Obesidade II
        return 'obesity3';                                   // Obesidade III
    }


}