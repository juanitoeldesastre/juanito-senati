<?php
    class Instrumento {
     
        public $nomre;
        public $categoria;
        private $modelos;
        private $tieneCuerdas;

        public function ___construct($_nombre,$_categoria) {
            $this->nombre = $_nombre;
            $this->categoria = $_categoria;
        }
 
        public function setearModelos($_modelos) {
            $this->modelos = $_modelos;
        }

        public function mostrarModelos() {
            return $modelos;
        }

    }
 
 
 ?>