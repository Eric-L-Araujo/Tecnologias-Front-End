<?php include 'cabecalho.php'?>

<form action="processa.php" method="post" name="form" style="margin: 50px;" target="resultadoFrame">
<input type="hidden" name="action" value="form2">
 <!-- Inicio -->
<div class="row">
  <h1>Exercício 2</h1>
  <div class="col-lg-7">
      <iframe frameborder="1" id="resultadoFrame" name="resultadoFrame">
      </iframe>
  </div> 
  <div class="row justify-content-md">
    <div class="col-lg-3">
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="Joana XXXXX" name="login" minlength = "6" maxlength ="10" required>
        <label for="floatingInput">Login</label>
      </div>
    </div>
  </div>
  
  <!-- fim -->
   <!-- inicio -->
  <div class="row justify-content-md">
    <div class="col-lg-3">
      <div class="form-floating mb-3">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="senha" minlength = "6" maxlength ="10" required>
        <label for="floatingPassword">Senha </label>
      </div>
    </div>
  </div>
  <!-- fim -->
  <div class="row justify-content-md">
    <div class="col-lg-1" >
      <button type="submit" value="Enviar" style="height: 50px; width: 100px; border-radius:8px;">Enviar</button>
    </div>
    <div class="col-lg-1">
      <a href="index.php"><button type="button" value="voltar" style="height: 50px; width: 100px; border-radius:8px;" >Voltar</button></a>
    </div>
  </div>
</div>
</form>

<?php include 'rodape.php'?>