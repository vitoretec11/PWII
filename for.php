<?php include "cabecalho.php"; ?>


    <h1>Laço de repetição FOR</h1>
    <p> Esse laço de repetição é mais utilizado e mais prático </p>
    <pre> 
        for($i = 0; $i < 10; $i++ ){
            echo "$i++";
        }
    </pre>
    <?php

    for($i = 0; $i <= 3; $i++){

        echo "<b>Oi</b><br>";
    }

    
    echo "<hr/>";
    
    for($i = 0; $i <= 3; $i++)
    {
        ?>
        <b>Oi</b><br>
        <?php
    }
    ?>


<?php include "rodape.php"; ?>
