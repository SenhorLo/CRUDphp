<?php

/
   $conn = mysqli_connect("localhost","root","","pedidos");
   if(!$conn){
     die("Conexão falhou! ".mysqli_connect_error());
   }else{
    echo "Sucesso!";
   }


   $codigo = $_POST["codigo"];
   $descricao   = $_POST["descricao"];
   $preco   = $_POST["preco"];

   $varSQL = "UPDATE Produto
              SET    descricao = '$descricao',
                     preco     = $preco
              WHERE  codProduto = {$codigo};";

   mysqli_query($conn, $varSQL) or die(mysqli_error());


   mysqli_close($conn);
?>
