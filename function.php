<h1> Funções nativas </h1>
<p>Funções nativas são funções que o propio php nos fornece, como por exemplo:
     a função isset(), //Verifica se exuste a variavel
     a função empty(), //Verifica se a variavel está vazia
     a função count(), //Conta quantos itens tem no array
     a função include"", //Inclui um arquivo dentro do outros
     a função echo"", // Imprime na tela
     a função strlen(), // Conta quantos caracteres tem uma string
     a função explode(), // Cria um array a partir de uma frase
     a função replace(), // Troca caracteres dentro de uma string
    </p>
<?php
    echo "<h1>";
    echo date("H:i:s");
    echo "</h1>";

?>
 Ano - mes - dia
<?php
    echo "<h1>";
    echo date("Y-m-d");
    echo "</h1>";
    
?>
função getdate()
<?php
    echo "<pre>";
    print_r (getdate() );
    echo "</pre>";
    
?>

<?php
    echo "<h1>";
    $array_data = getdate();
    echo $array_data["mday"]."/".$array_data["mon"]."/".$array_data["year"];
    echo "</h1>";
    
    echo "<h1>";
    print_r (5, 15);
    echo "</h1>";
?>
<h1>Funções personalizadas </h1>