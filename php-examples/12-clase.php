<?php

class Calculadora {
    public $primerNumero;
    public $segundoNumero;

    public function __construct($num1 = 0, $num2 = 0) {
        $this->primerNumero = $num1;
        $this->segundoNumero = $num2;
    }

    public function sumar() {
        return $this->primerNumero + $this->segundoNumero;
    }

    public function restar() {
        return $this->primerNumero - $this->segundoNumero;
    }

    public function multiplicar() {
        return $this->primerNumero * $this->segundoNumero;
    }

    public function dividir() {
        // Verifica si el divisor es 0 para evitar una división por cero
        if ($this->segundoNumero != 0) {
            return $this->primerNumero / $this->segundoNumero;
        } else {
            return "Error: División por cero";
        }
    }

    public function potencia() {
        return pow($this->primerNumero, $this->segundoNumero);
    }
}

// Ejemplo de uso
$miCalculadora = new Calculadora(5, 2);
echo "Suma: " . $miCalculadora->sumar() . "<br>";
echo "Resta: " . $miCalculadora->restar() . "<br>";
echo "Multiplicación: " . $miCalculadora->multiplicar() . "<br>";
echo "División: " . $miCalculadora->dividir() . "<br>";
echo "Potencia: " . $miCalculadora->potencia() . "<br>";

?>
