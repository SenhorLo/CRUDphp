<?php


   $conn = mysqli_connect("localhost","root","","pedidos");
   if(!$conn){
     die("Conexão falhou! ".mysqli_connect_error());
   }else{
    echo "Sucesso!";
   }


  $codCliente = $_POST["cod"];
  
  $varSQL= "DELETE FROM Cliente WHERE codCliente = {$codCliente}";
  mysqli_query($conn,$varSQL) or die(mysqli_error());

  echo "Comando DELETE executado com Sucesso!";


   mysqli_close($conn);
?>
