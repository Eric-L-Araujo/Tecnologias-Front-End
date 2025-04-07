<?php
// Um construtor é um método

class Login {
  private $email;
  private $senha;
  private $nome;

  public function __construct($email, $senha, $nome)
  {
    $this->nome = $nome;
    $this->setEmail($email);
    $this->setSenha($senha);
  }

  public function getNome() {
    return $this->nome;
  }


  //Quando definimos as características do objets como privados, e se quisermos acssar esses valores nas instancias das classes, temos que usar o método get e set para conseguir
  //Para pegar o valor do e-mail
  public function getEmail() {
    return $this->email;
  }

  //Para pegar o valor de email, precisa pôr um parâmetro, que é o próprio nome da varíavel
  public function setEmail($e){
    // Porque utilizar o set ao inves de acessar diretamente o atributo, porque podemos filtrar o valor, ou seja, se eu colocr lgum caractereinválido  lá embaixo, ele vai limpar e mostrar os dados corretos, se eles estiverem corretos
    $email = filter_var($e, FILTER_SANITIZE_EMAIL);
    $this->email = $email;
  }

  public function getSenha() {
    return $this->senha;
  }

  public function setSenha($s){
    $this->senha = $s;
  }

  public function Logar() {
    if($this->email == "teste@teste.com" and $this->senha == "123456") {
      echo "Logado com sucesso!";
    }
    else {
      echo "Dados inválidos";
    }
  } 

}
//Instanciando a classe 
// $logar = new Login();
// $logar->email = "teste@teste.com";
// $logar->senha ="123456";

$logar = new Login("teste@teste.com", "123456", "Marinho bollado");
$logar->Logar();
echo "<br>";
//Para mostrar a senha e o e-mail na tela.
echo $logar->getNome();

//pegando a variavel e armazenando o valor de e-mail e de senha, e depois chamando a funcção que valida esses valores.
// $logar->Logar();

?>