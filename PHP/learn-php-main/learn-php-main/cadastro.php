<?php



    // if(isset($_POST["locomocao"])) {

    //     echo "Seus meios de locomoção são: <br> ";

    //    // Faz loop pelo array dos numeros
    //     foreach($_POST["locomocao"] as $locomotion)
    //     {
    //     echo "-" . $locomotion . "<br>";
    //     }


    // }


    // if(isset($_POST["cadastro"])) {
    //     echo "Dados: <br>";

    //     foreach($_POST["cadastro"] as $cadastro1)
    //     {
    //     echo "-" . $cadastro1 . "<br>";
    //     }

    // }

    if ($_POST['enviar'] == 'Enviar') {

        foreach ($_POST as $key => $value) {
            if ($key <> "locomocao")
            echo "$key: $value <br>";
        }

        foreach ($_POST['locomocao'] as $key => $value) {
            echo "Locomoção: $value <br>";
        }
    }

    // echo "Nome: " . $_POST["nome"];
    // echo "<br>Data de nascimento: " . $_POST["date"];

    // echo "Seu sexo é: " . $_POST["sexo"];

?>
