<?php


   $conn = mysqli_connect("localhost","root","","pedidos");
   if(!$conn){
     die("Conexão falhou! ".mysqli_connect_error());
   }else{
    echo "Sucesso!";
   }


   $nroPedido  = $_POST["cod"];
   $data       = $_POST["data"];
   $codCliente = $_POST["codcliente"];

   $varSQL= "INSERT INTO Pedido(nroPedido, data, codCliente) VALUES ({$nroPedido},'{$data}', {$codCliente})";
    mysqli_query($conn,$varSQL) or die(mysqli_error());


   mysqli_close($conn);
?>
