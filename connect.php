<?php 
    if(!$con = mysqli_connect('localhost','root','','bd_correF')){
        print "Não foi possível conectar ao banco de dados!";
    }
    mysqli_query($con, "SET NAMES utf8");

?>