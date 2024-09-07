<?php
$frutas = array("maçã","laranja","banana");

print_r($frutas);// Escreve na tela os dados básicos do array

var_dump($frutas);// Detalha os dados do array

echo count($frutas);// Escreve na tela a quantidade de itens que o array possui

array_push($frutas, "kiwi"); // Adiciona um novo item ao array

foreach($frutas as $fruta){
    echo $fruta;
}
// Exercicio: Gere um array que a cada indice desse array receba um novo array com as Chaves Nome, Idade e Email com seus respectivos valores inventados aleatoriamente




$pessoas = array(

    array(
        "Nome" => "Vitor",
        "Idade" => 19,
        "Email" => "Email@gmail.com"
    ),
    
    array(
        "Nome" => "Mateus",
        "Idade" => 22,
        "Email" => "EmailTeste123@gmail.com"
    ),

    array(
        "Nome" => "Antonio",
        "Idade" => 30,
        "Email" => "EmailReal1234@gmail.com"
    ),

    array(
        "Nome" => "Kanye",
        "Idade" => 30,
        "Email" => "Ye@gmail.com"
    ),

    array(
        "Nome" => "Caua",
        "Idade" => 20,
        "Email" => "Caua123@gmail.com"
    ),
    
    array(
        "Nome" => "Gomes",
        "Idade" => 17,
        "Email" => "Gomezera@gmail.com"
    ),

    array(
        "Nome" => "David",
        "Idade" => 23,
        "Email" => "David123@gmail.com"
    ),
    array(
        "Nome" => "Gerson",
        "Idade" => 19,
        "Email" => "receba123@gmail.com"
    ),
    array(
        "Nome" => "Matheus",
        "Idade" => 18,
        "Email" => "picilover@gmail.com"
    ),
    array(
        "Nome" => "Josue",
        "Idade" => 18,
        "Email" => "emailzudo@gmail.com"
    ),
    array(
        "Nome" => "Roberta",
        "Idade" => 24,
        "Email" => "roberta@gmail.com"
    ),

    );

   for($i = 0; $i < count($pessoas); $i++ ){

        //echo $pessoas[$i]."<br>";
        //echo $i;
        //echo "<pre>";
        //print_r($pessoas[$i]);
        //echo "</pre>";

   }

   echo "<table>";
   echo "<table border = '5'>";
   echo "<tr>";
   echo "<td>Nome</td>";
   echo "<td>Idade</td>";
   echo "<td>Email</td>";
   echo "</tr>";
   
   for($i = 0; $i < count($pessoas); $i++ ){
      
        echo "<tr>";
        echo "<td>".$pessoas[$i]["Nome"]."</td>";
        echo "<td>".$pessoas[$i]["Idade"]."</td>";
        echo "<td>".$pessoas[$i]["Email"]."</td>";

   }

   foreach($pessoas as $a)
   {
    echo "<tr>";
    echo "<td>".$a["Nome"]."</td>";
    echo "<td>".$a["Idade"]."</td>";
    echo "<td>".$a["Email"]."</td>";
    echo "</tr>";

   }

   echo "</table>";



?>