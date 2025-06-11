<div class="topo">
  <link rel="stylesheet" href="lindo.css">
  <p><img src="logos/deskPreto.png" alt="logoCria" id="imgLogotipo"></p>
  <ul class="menu">
    <a href="index.php"><li>Home</li></a>
    <li class="drop"><a href="#">Cadastrar</a>
      <ul>
        <a href="addTenis.php">Tênis</a>
        <a href="addUsuarios.php">Users</a>
      </ul>
    </li>
    <li class="drop"><a href="#">Listar</a>
      <ul>
        <a href="listarTenis.php">Tênis</a>
        <a href="listarUsers.php">Users</a>
      </ul>
    </li>
    <li class="drop"><a href="#">Pesquisar</a>
      <ul>
        <a href="pesquisarTenis.php">Tênis</a>
        <a href="pesquisarUser.php">Users</a>
      </ul>
    </li>
    <li class="drop"> <a href="pesquiar.php">Contato</a></li>
    <?php 
      @session_start();
      if (isset($_SESSION['logado']) && $_SESSION['logado'] == true) {
       echo "<li class=drop><a href=#>Olá $_SESSION[nome]</a>";
       echo "<li class=drop><a href=#><img src=$_SESSION[foto]></a>";
       echo "<li class=drop><a href=logoff.php>Desconectar</a>";
      }else {
       echo "<a href=login.php>Entrar</a>";
      }
    ?>
  </ul>
  <div class="burguer">
    <div></div>
    <div></div>
    <div></div>
  </div>
</div>