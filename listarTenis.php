<?php include ('head.php'); ?>
  <?php include ('topo.php'); ?>
  <body>
    <?php 
    @session_start();
    if (isset($_SESSION['msg'])) {
      echo $_SESSION['msg'];
      unset ($_SESSION['msg']);
    }
    ?>

    <?php 
    require('connect.php');
    $tenisP = mysqli_query($con,"Select * from `tb_produtos`");
    echo "<div class=CardsTenis>";
    while ($tenis = mysqli_fetch_assoc($tenisP)){
      echo "<div>";
          echo "<p>$tenis[codigo]</p>";
            echo "<div class = container >";
              echo "<img src = $tenis[Foto]>";
            echo "</div>";
          echo "<p class = descricaoTenis>$tenis[Descricao]</p>";
          echo "<p>Marca: $tenis[Marca]</p>";
          echo "<p class=botao>
            <a href = alterarTenis.php?cod=$tenis[codigo]>Alterar</a>
            <a href = javascript:excluir($tenis[codigo])>Deletar</a>
          </p>";
        echo "</div>";
      }
    echo "</div>";
    ?>
    <script src="scripts/app.js"></script>
  </body>