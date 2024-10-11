<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "pw_bd";

$script = "CREATE DATABASE PW_BD;
        USE PW_BD;
        CREATE TABLE PRODUTOS (
            ID INT PRIMARY KEY AUTO_INCREMENT,
            DESCRICAO VARCHAR(150) NOT NULL,
            CODIGO_BARRA VARCHAR(25) NOT NULL,
            IMAGEM VARCHAR(50),
            VALOR DECIMAL(10,2) NOT NULL,
            ATIVO BIT NOT NULL

        );
        INSERT INTO PRODUTOS (DESCRICAO, CODIGO_BARRA, VALOR, ATIVO) VALUES ('Amendoin verde','73173172317732',5.50, 1);
        INSERT INTO PRODUTOS (DESCRICAO, CODIGO_BARRA, VALOR, ATIVO) VALUES ('Goabinha','12313123131123',1.50, 1);
        
        "
        ;


$conexao = new mysqli($servidor, $usuario, $senha, $banco);
if($conexao->connect_error) {
    die("falha na conexão: ".$conexao->connect_error);
}

?>