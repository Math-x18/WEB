<?php
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $bd = "cadastprod";

    $conexao = new mysqli($host, $usuario, $senha, $bd);

    //if($conexao->connect_errno){
    //    echo "falha na conexão: (".$conexao->connect_errno.") ".$conexao->connect_errno; 
    //}else{
    //    echo"Conexão efetuada com sucesso";
    //}
    

?>