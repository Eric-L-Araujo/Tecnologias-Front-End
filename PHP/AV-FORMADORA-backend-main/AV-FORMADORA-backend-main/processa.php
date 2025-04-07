<?php
// EXERCÍCIO 01
// Função que exibe na tela o nome e o sobrenome do usuário, na quantidade de vezes que o usuário digitar.
function repeatName() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = htmlspecialchars($_POST["nome"]);
        $sobrenome = htmlspecialchars($_POST["sobrenome"]);
        $repeticao = htmlspecialchars($_POST["repeticao"]);
    
        if (!empty($nome) && !empty($sobrenome) && !empty($repeticao) && $repeticao >=0) {
        
            for ($i = 1; $i <=$repeticao; $i++) {

                if ($i % 2 == 1) {
                    echo $i." - ".$nome."<br>";

                } else {
                    echo $i." - ".$sobrenome."<br>";
                }   
            }

        } else {
            echo "Por favor, preencha todos os campos corretamente";
            
        }
    
    }


}

// EXERCÍCIO 02
// Função para autenticar meu login e seha do AVA.
function validarCampos() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $login = ($_POST['login']);
        $senha = ($_POST['senha']);
        $matricula = 24201601;
        $pass = 12345678;
        if (($login == $matricula) && ($senha == $pass)) {
            echo "<p>Usuário autenticado com sucesso!</p>";
        } else {
            echo "[Falha na autenticação] Os dados inseridos não conferem!";
        }
        // foreach ($_POST as key -> $value) {
        //     echo "$key: $value <br>";
        // }
    } 
}



// EXERCÍCIO 3

function calcularDensidade() {
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $massa = htmlspecialchars($_POST['massa']);
        $volume = htmlspecialchars($_POST['volume']);
        
        
        if (!empty($massa) && !empty($volume)) {
            $densidade = floatval($massa) / floatval($volume);
            echo 'A densidade do material é de: '.$densidade. ' por g/m³ (centímetros cúbicos)';
        } 
        else {
        echo 'Por favor, preencha os campos corretamente para obter o resultado.';
    }
 }

   
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $rota = $_POST['action'];

    switch ($rota) {
        case 'form1':
            repeatName();
            break;
        case 'form2':
            validarCampos();
            break;
        case 'form3':
            calcularDensidade();
            break;
        default:
            echo 'Ação inválida.';
            break;
            


    }


}

?>


<!-- ESTILO INTERNO DO IFRAME -->
<style>
      body {
        margin: 0;
        padding: 0;
        color: green;
        width: 100%;
        height:100%;
        font-size: 18px;
        font-family: Arial, Helvetica, sans-serif;
      }


</style>
