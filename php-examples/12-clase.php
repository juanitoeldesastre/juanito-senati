class calculadora {

public $primerNumero;
public $segundoNumero;

public Calculadora($num1 = 0, $num2 = 0) {
    $this->primerNumero=$num1;
    $this->segundoNumero=$num2;
}

public function sumar() {
    return $primerNumero+$segundoNumero;
}

public function restar() {
    return $primerNumero-$segundoNumero;
}

public function multiplicar() {
    return $primerNumero*$segundoNumero;
}

public function dividir() {
 
   return $primerNumero/$segundoNumero;
}