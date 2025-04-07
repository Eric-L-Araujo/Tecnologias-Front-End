<?php

    //A classe é o modelo de negocio.
    //A classe está como privado porque somente essa classe poderá ver seus atributos e métodos.
class calculadora {

    private $total;
    private $n1;
    private $n2;

    //Construitor, baseado em atributos, ou seja, suas características. E métodos: as funções que minha classe vai desempenhar
    //O construtor serve para inicializar a minha classe, inicializando meus atributos. Aqui embaixo, o construtor está zerando meus atributos.
    function __construct() {
        //O this dá acesso aos atributos da classe
        $this->total = 0;
        $this->n1 = 0;
        $this->n2 = 0;
    }
    // Como esses métodos são públicos, eu posso acessá-los de fora da minha classe
    public function setNumero1($n1) {
        $this->n1 = $n1;
    }

    public function setNumero2($n2) {
        $this->n2 = $n2;
    }

    public function somar() {
        $this->total = $this->n1 + $this->n2;
    }

    public function subtrair() {
        $this->total = $this->n1 - $this->n2;
    }

    public function dividir() {
        $this->total = $this->n1 / $this->n2;
    }

    public function multiplicar() {
        $this->total = $this->n1 * $this->n2;
    }

    public function gettotal() {
        return $this->total;
    }

}





?>