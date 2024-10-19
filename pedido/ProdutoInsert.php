<?php


   $conn = mysqli_connect("localhost","root","","pedidos");
   if(!$conn){
     die("Conexão falhou! ".mysqli_connect_error());
   }else{
    echo "Sucesso!";
   }


   $codProduto = $_POST["cod"];
   $Descricao  = $_POST["descricao"];
   $Preco      = $_POST["preco"];

   $varSQL= "INSERT INTO Produto(codProduto, descricao, preco) VALUES ({$codProduto},'{$Descricao}', {$Preco})";
    mysqli_query($conn,$varSQL) or die(mysqli_error());


   mysqli_close($conn);
?>
