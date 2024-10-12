<?php
if (!empty($_GET['Id'] ) && isset ($_GET['Id']))
{
//Logica da exlusão
include 'conexao.php';
$sql = "Delete from Produtos where Id = $_GET[Id]";
$resultado = $conexao->query($sql);
if($resultado){
    header('location: produtos.php');
}
else{
    //aqui logica caso o delete from nao funcione
    //aqui fica o mesmo redirecionamento porem com mensagem de erro
}
}


else
{
  
    header ('location: produtos.php');

}
?>