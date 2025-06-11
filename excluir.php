<?php 
    @session_start();
    require('connect.php');
    extract($_POST);
    if (mysqli_query($con,"Delete from `tb_produtos` where `codigo` = '$codigo'")) {
        $msg = "<p class=sucesso>Corre cancelado! Produto removido. ✅</p>";
    }else {
        $msg = "<p class=erro>O Corre ainda tá de pé, não foi possível apagar o produto. ❌</p>";
    }

    $_SESSION['msg'] = $msg;
?>