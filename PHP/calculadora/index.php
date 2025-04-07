<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
</head>
<body>
    <?php

    //O resultado está pelo metodo get porque no "calculadora.php" estou incluindo a URL, ou seja, através do método get
    if (isset($_GET["total"])) {
        echo "Resultado " . $_GET["total"] ."<br><br>";
    }
    ?>

    <form action="calcular.php" method="POST" id="calculadora">
        <label for="n1">
            Número 1:
            <input type="text" id="n1" name="n1">
        </label>
        <br><br>
        <label for="n2">
            Número 2:
            <input type="text" id="n2" name="n2">
        </label>
        <br><br>
        Operações<br>
        <label>
            <input type="radio" name="operacao" id="operacao" value="somar">
            Somar
        </label>
        <label>
            <input type="radio" name="operacao" id="operacao" value="subtrair">
            Subtrair
        </label>
        <label>
            <input type="radio" name="operacao" id="operacao" value="dividir">
            Dividir
        </label>
        <label>
            <input type="radio" name="operacao" id="operacao" value="multiplicar">
            Multiplicar
        </label>
        <br><br>
        <input type="submit" value="calcular">
        <input type="reset" value="limpar">
    </form>
</body>
</html>

<!-- ANOTAÇÕES PROJETO -->
<!-- Fazer uma regra de negócio para cada um dos campos;-->
 <!-- Classes, regras de negócio e telas -->


 <!-- Fazer página HMTML
  html > CSS
  js >  ajax 
  php > banco de dados, regra de negócios
 
 -->