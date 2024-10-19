<?php


   $conn = mysqli_connect("localhost","root","","pedidos");
   if(!$conn){
     die("Conexão falhou! ".mysqli_connect_error());
   }else{
    echo "Sucesso!";
   }


   $codigo = $_POST["codigo"];
   $nome   = $_POST["nome"];

   $varSQL = "UPDATE Cliente
              SET    Nome = '$nome'
              WHERE  codCliente = {$codigo};";

   mysqli_query($conn, $varSQL) or die(mysqli_error());


   mysqli_close($conn);
?>
