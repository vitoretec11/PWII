<?php include "cabecalho.php"; ?>


    <h1>Estrutura Condicional (IF ELSE)</h1>
    <p>$inteira = 10</p>
    <p>$nome = "Prof"</p>
    <p>$valor = 10.50</p>
    <p>$ativo = True</p>
    
    <pre>
        if($inteira == 10)
        {
            echo "o conteudo é 10";
        }
        else if($inteira >= 11)
        {
            echo "maior ou igual a 11";
        }
        else
        {
            echo "não é 10";
        }
    </pre>
        <?php
        $inteira = 9;
        if($inteira == 10)
        {
            echo "A variavel é 10";
        }
        else if($inteira >=11)
        {
            echo "A variavel é maior ou igual a 11";
        }
        else
        {
            echo "A variavel só pode ser menor que 10";
        }
        ?>
    <p>
        As variaveis string podem ser contados os caracteres e usados no if
    </p>
    <pre>
        if( count($nome) > 10)
        {
            echo "seu nome tem mais que 10 caracteres";
        }
    </pre>

    <?php
   $nome ="Vitor";
   if( strlen($nome) > 5)
   
     {
     echo "<h2>seu nome tem mais que 10 caracteres quantidade é ".strlen ($nome)."</h2>";
     
     }
     else
     {
        echo "<h2>seu nome não tem mais que 5 letras, ele possui ".strlen ($nome)."</h2>";
     }
     ?>
    
    <p>
        Podemos verificar se a a variavel $nome está vazia
    </p>
    <pre>
        if ( empty($nome) )
        {
            echo "Sua variavel está vazia";
        }
    </pre>
    <p>
        Também podemos comparar string normalmente
    </p>
    <pre>
        if($nome == "Vitor")
        {
            echo "Nome igual"
        }
        else
        {
            echo "Nomes diferentes"
        }
    </pre>
    <p>
        Podemos verificar se a variavel é verdadeira ou falsa
    </p>

<?php include "rodape.php"; ?>
    