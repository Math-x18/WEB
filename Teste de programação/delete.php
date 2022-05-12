<?php require_once('config.php');

if(!empty($_GET['CodigoProduto']))
{
    
    
    $Codigo = $_GET['CodigoProduto'];
    
    
    $sqlSelect = "SELECT *  FROM produto WHERE CodigoProduto=$Codigo";
    
    $result = $conexao->query($sqlSelect);
    
    if($result->num_rows > 0)
    {
        $sqlDelete = "DELETE FROM produto WHERE CodigoProduto=$Codigo";
        $resultDelete = $conexao->query($sqlDelete);
    }
}
    
header('Location: cadastro.php');

   
?>