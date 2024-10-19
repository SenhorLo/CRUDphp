<?php


   $conn = mysqli_connect("localhost","root","","pedidos");
   if(!$conn){
     die("Conexão falhou! ".mysqli_connect_error());
   }else{
    echo "Sucesso!";
   }


  $nroPedido = $_POST["cod"];
  
  $varSQL= "DELETE FROM Pedido WHERE nroPedido = {$nroPedido}";
  mysqli_query($conn,$varSQL) or die(mysqli_error());

  echo "Comando DELETE executado com Sucesso!";


   mysqli_close($conn);
?>
