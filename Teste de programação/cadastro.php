<?php require_once('config.php');

    if(isset($_POST['submit'])){

        //print_r('Codigo: ' .$_POST['codigo']);
        //print_r('<br>');
        //print_r('Descrição: ' .$_POST['descricao']);

        $codigo= $_POST['codigo'];
        $descricao= $_POST['descricao'];

        $result = mysqli_query($conexao, "INSERT INTO produto(CodigoProduto,DescricaoProduto) 
        VALUES ('$codigo','$descricao')");
    }

    $sql = "SELECT * FROM produto ";

    $con = $conexao->query($sql) or die($sql->error);

    //print_r($mostrar);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Cadastrar Produto</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(90deg, rgb(4, 7, 180), rgb(0, 162, 255));
        }
        
       .box{
           position: absolute;
           top: 50%;
           left: 50%;
           transform: translate(-50%,-50%);
           background-color: rgba(255, 255, 255, 0.9);
           color: black;
           padding: 15px;
           border-radius: 15px;
           
       }
       fieldset{
           border: 3px solid  dodgerblue;
       }
       legend{
           text-align: center;
       }
       .inputBOX{
           position: relative;
       }
       .inputUser{
           border-color: dodgerblue;
           outline: none;
           font-size: 15px;
           border-radius: 8px;
           letter-spacing: 2px;
       }
       #submit{
           background-color: dodgerblue;
           border-color: dodgerblue;
           font-size: 15px;
           border-radius: 5px;
           color: white;
           cursor: pointer;
       }

       #submit:hover{
           background-color: rgb(23, 64, 250);
       }
       th{
        padding: 15px;
       }
       td{
        padding: 15px;
       }

       button{ 
            background-color: dodgerblue;
            border-color: dodgerblue;
            border-radius: 5px;
            color: white;
            font-size: 15px;
       }

    </style>

</head>
<body>
    <div class="box">
        <form action="cadastro.php" method="POST">
            <fieldset>
                <legend><b>Cadastro Produto</b></legend>
                <br>
                <div class="inputBox">
                    <label for="codigo" class="LabelInput">Código Produto</label><br>
                    <input type="text" name="codigo" id="codigo" class="inputUser" >
                    
                </div>
                <br>
                <div class="inputBox">
                    <label for="descricao" class="LabelInput">Descrição Produto</label><br>
                    <input type="text" name="descricao" id="descricao" class="inputUser" >
                    
                </div>
                    <br>
                    <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
        <div class="m-5">
            <table class="table">
                <br>
                <thead>
                    <tr>
                    <th scope="col">Código Produto</th>
                    <th></th>
                    <th scope="col">Descrição Produto</th>
                    <th scope="col"></th>              
                    </tr>
                </thead>
                <tbody>
                <?php 
                        while($dado = $con->fetch_array())
                        {
                            echo "<tr>";
                            echo "<td>".$dado['CodigoProduto']."</td>";
                            echo "<td></td><td>".$dado['DescricaoProduto']."</td>";
                            echo  "<td>
                                        <a href='/delete.php?CodigoProduto=" . $dado['CodigoProduto'] . "'>
                                            <button>Excluir</button>
                                        </a>
                                </td>";
                            echo  "</tr>" ;
                        }
                        $con->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>