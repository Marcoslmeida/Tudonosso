<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Calculadora-GET</title>
  </head>
  <body>

   <!--  <select class="form-control form-control-lg">
      <option>Tipo</option>
    </select>
    <select class="form-control">
      <option>Soma</option>
    </select>
    <select class="form-control form-control-sm">
      <option>Subtração</option>
    </select>
 -->
<div class="container">
  <form method="get" action="exerciciofuncao.php">
    <div class="form-row">
      <!-- Opção de Selecionar a operação desejada -->
      <div class="form-group col-md-4">
        <label for="inputtipo">Tipo</label>
        <select name="tipo" id="inputtipo" class="form-control">
          <option value="">.::Escolha uma Opção::.</option>
          <option value="Soma">Soma</option>
          <option value="Subtração">Subtração</option>
          <option value="Multiplicação">Multiplicação</option>
          <option value="Divisão">Divisão</option>
        </select>
      </div>
    </div>
    <!-- Opção para colocar o primeiro número  --> 
    <div class="form-row">
      <div class="form-group">
      <label for="inputnum1">Número 1</label>
      <input name="num1" type="text" class="form-control" id="inputnum1">
      </div>
    </div>
    <!-- Opção para colocar o segundo número --> 
    <div class="form-row">
      <div class="form-group">
        <label for="inputnum2">Número 2</label>
        <input name="num2" type="text" class="form-control" id="inputnum2">
      </div>
    </div>
    <!-- Botão para Calcular os números desejados -->
    <button type="submit" class="btn btn-primary">Calcular</button>
  </form>
</div>


    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>