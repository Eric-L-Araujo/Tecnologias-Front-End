<?php

// Para criar uma classe, utiliza-se o termo "class", definindo seu nome com a primeira letra maiuscscula;

class Pessoa {
  //Características da classe pessoa
  public $nome;
  public $idade;

  //Métodos ou fuções, que funcionam como ações dos objetos, nesse caso, pessoas

  //Para utilizar os atributos e métodos dentro do escopo da classe, precisa utilizar o "this->" (que quer dizer "este")
  public function Falar() {
    echo $this->nome ." possui " . $this->idade. " anos". " e acabou de falar";
  }

  //Saída: Rodrigo Bastos de Oliveira Mello possui 30 anos e acabou de falar
}

//como instanciar a classe pessoa:
// - Para instanciar uma classe, utiliza-se do termo new + nome da classe
$rodrigo = new Pessoa();


//Agora, rodrigo é um objeto pertencente a classe Pessoa e eu posso usar o método falar com ele
// $rodrigo->Falar();


//Para acessar o atributo nome, utilizar a variável da classe e a setinha, mas sem precisar colocar o cifrão para chamá-la. Além disso, podemos atribuir um valor depois.
$rodrigo->nome = "Rodrigo Bastos de Oliveira Mello";
$rodrigo->idade = "30";
$rodrigo->Falar();
//Para exibir os valores dos atributos fora da classe
// echo $rodrigo->nome;
?>