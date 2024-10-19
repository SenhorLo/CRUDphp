<?php


   $conn = mysqli_connect("localhost","root","","pedidos");
   if(!$conn){
     die("Conexão falhou! ".mysqli_connect_error());
   }else{
    echo "Sucesso!";
   }


   $codCliente    = $_POST["cod"];
   $Nome = $_POST["nome"];

   $varSQL= "INSERT INTO Cliente(codCliente, Nome) VALUES ({$codCliente},'{$Nome}')";
    mysqli_query($conn,$varSQL) or die(mysqli_error());


   mysqli_close($conn);
?>
