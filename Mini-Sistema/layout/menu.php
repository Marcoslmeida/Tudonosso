<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="principal.php">OnTheLine</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="produtos.php">Produtos <span class="sr-only">(página atual)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="categorias.php">Categorias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="usuarios.php">Usuários</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="funcionarios.php">Funcionários</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="cargos.php">Cargos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="servicos.php">Serviços</a>
      </li>
      
    </ul>
     <p class="text-success">Usuario: 
      <strong><?php echo $_SESSION['nome']; ?></strong>
      &nbsp;
      &nbsp;
      <a href="logout.php">
        <i class="fas fa-sign-out-alt"></i>
      </a>
    </p>
  </div>
</nav>