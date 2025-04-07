<?php include 'cabecalho.php'?>



<form action="processa.php" method="post" name="form" style="margin: 50px; margin-bottom: 100px;" target="resultadoFrame">
<input type="hidden" name="action" value="form3">
<div class="row">
  <div class="row justify-content-md">
    <div class="col-lg-3">
      <h1>Exercício 3</h1>
    </div>
    <div class="col-lg-4">
      <h1>Cálculo de densidade</h1>
    </div>
  </div>
  <div class="row justify-content-md">
    <div class="col-lg-6">
      <p>A densidade é a relação da massa de matéria em um determinado volume. Trata-se de uma propriedade específica que considera a razão entre a massa (m) e o volume (v) de um material.</p>
    </div>
  </div>
      <iframe frameborder="1" id="resultadoFrame" name="resultadoFrame" class="result" style=" width: 450px; height:80px; font-size:40px;">
      </iframe>
    </div>
  </div>
  <div class="row justify-content-start">
    <div class="col-lg-3">
      <div class="form-floating mb-3">
        <input type="number" class="form-control" id="floatingNumber" placeholder="Massa" name="massa" step="0.1">
        <label for="floatingNumber">Massa</label>
      </div>
    </div>
  </div>
  <div class="row justify-content-md">
    <div class="col-lg-3">
        <div class="form-floating mb-3">
          <input type="number" class="form-control" id="floatingNumber" placeholder="Volume" name="volume" step="0.1">
          <label for="floatingNumber">Volume</label>
        </div>
    </div>
  </div>
  <div class="row justify-content-md" >
    <div class="col-lg-1" >
      <button type="submit" value="Enviar" style="height: 50px; width: 100px; border-radius:8px;">Enviar</button>
    </div>
    <div class="col-lg-2">
      <a href="index.php"><button type="button" value="voltar" style="height: 50px; width: 100px; border-radius:8px;">Voltar</button></a>
    </div>
  </div>
  

</div>
</form>

<?php include 'rodape.php'?>