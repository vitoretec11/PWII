<?php include "cabecalho.php"; ?>
<?php
if( isset($_POST['id']) && !empty($_POST['id']) && isset($_POST['descricao']) && !empty($_POST['descricao']) && isset($_POST['valor']) && !empty($_POST['valor']) && isset($_POST['codigo_barra']) && !empty($_POST['codigo_barra']))
{
    include "conexao.php";
    $sql = "UPDATE PRODUTOS SET descricao = '$_POST[descricao]',
                                valor = $_POST[valor],
                                codigo_barra = '$_POST[codigo_barra]'
            WHERE Id = $_POST[id]"
            ;
            
$resultado = $conexao->query($sql);
if($resultado)
{
//logica para mensagem de sucesso
}
else
{
//caso o update de false
}
}
?>

<?php 
if ( isset($_GET["Id"]) && !empty( $_GET['Id'] )   )   
{
    include "conexao.php";
    $sql = "Select Id, Descricao, Valor, Codigo_Barra from produtos where Id = $_GET[Id]";
    $resultado = $conexao->query($sql);
    if($resultado)
    {
        if($resultado->num_rows > 0)
        {
            while($row = $resultado->fetch_assoc()) 
            {
                $id = $row["Id"];
                $descricao = $row["Descricao"];
                $valor = $row["Valor"];
                $codigo_barra = $row["Codigo_Barra"];
            }
        }
        else
        {
            header("location: produtos.php?erro=Nenhum registro encontrado");
        }
    }
    else
    {
        header("location: produtos.php?erro=Erro do if do resultado");
    }

}
else
{
    header("location: produtos.php?erro=Nenhum id informado");
}



?>

<form action="editar_produto.php?Id=<?php echo $id; ?>" method="post">
    <input name="id" value="<?php echo $id ?>" />
    <input name="descricao" value="<?php echo $descricao ?>" />
    <input name="valor" value="<?php echo $valor ?>" />
    <input name="codigo_barra" value="<?php echo $codigo_barra ?>" />
    <button type="submit" >
        Salvar Alterações
    </button>

</form>



<?php include "rodape.php"; ?>