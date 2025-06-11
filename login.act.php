<?php 
    @session_start();
    extract($_POST);
    require('connect.php');
    $destino = "";
    $msg = "";
    $busca = mysqli_query($con, "Select * from `tb_usuarios` where `email` = '$email'");

    if ($busca->num_rows == 1) {
        $usuario = mysqli_fetch_assoc($busca);
        if(password_verify($senha,$usuario['senha'])){
            $_SESSION['logado'] = true;
            $_SESSION['nome'] = $usuario ['nome'];
            $_SESSION['email'] = $usuario ['email'];
            $_SESSION['foto'] = $usuario ['foto'];
            $destino = "location:listarTenis.php";
        }else {
            $destino = "location:login.php";
            $msg = "<p class = erro> Email ou senha incorretos</p>";
        }
    }else {
        $destino = "location:login.php";
        $msg = "<p class = erro> Email ou senha incorretos</p>";
    }
    $_SESSION['msg'] = $msg;
    header($destino);
?>