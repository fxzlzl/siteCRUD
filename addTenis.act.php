<?php 
    @session_start();
    require('connect.php');
    extract($_POST);
    extract($_FILES);
    $msg = '';
    $destino = "imagens_tenis/".md5(time().$foto['size']).".jpg";
    move_uploaded_file($foto['tmp_name'],$destino);
    if ((strlen($Marca)>0) && (strlen($Valor)>0) && (strlen($Tamanho)>0) && (strlen($Cor)>0) && (strlen($Descricao)>0)) {
        if (mysqli_query($con,"INSERT INTO `tb_produtos` (`Marca`, `Valor`, `Tamanho`, `Cor`, `Foto`, `Descricao`, `codigo`) 
        VALUES ('$Marca', '$Valor', '$Tamanho', '$Cor', '$destino', '$Descricao', NULL);")) {
            $msg = "<p class=sucesso>Corre feito! produto criado com sucesso! 😁 </p>";
        }else{
            $msg = "<p class=erro>Corre atrasado, não foi possível adicionar um produto! 😥 </p>";
        }
    }else{
        $msg = "<p class=sucesso>Preencha tudo corretamente, faz favor né!</p>";
    }
    $_SESSION['msg'] = $msg;
    header("location:addTenis.php");
