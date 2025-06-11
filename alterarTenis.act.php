<?php
    @session_start();
    require('connect.php');
    extract($_POST);
    extract($_FILES);

    if ($foto['size']> 0){
        $destino = "imagens_tenis/".md5(time().$foto['size']).".jpg";
        move_uploaded_file($foto['tmp_name'],$destino);
    }
    mysqli_query($con, "UPDATE tb_produtos SET
    `Marca` = '$Marca',
    `Valor` = '$Valor',
    `Tamanho` = '$Tamanho',
    `Cor` = '$Cor',
    `Foto` = '$destino',
    `Descricao` = '$Descricao'
    WHERE `tb_produtos`.`codigo` = '$codigo';"); 
    
header("location:alterarTenis.php?cod=$codigo");

?>