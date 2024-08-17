<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina inicial do site</title>
    <link href="bootstrap.min.css" rel="stylesheet" />

</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Aula PWII</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Pagína inicial

          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="variavel.php">Variavel
          </a>
        </li> <li class="nav-item">
          <a class="nav-link" href="if.php">If
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="while.php">While</a></li>
            <li><a class="dropdown-item" href="for.php">For</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="foreach.php">Foreach</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="bootstrap.php">Bootstrap</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

    <div class="container">

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

    </div>
<script src="bootstrap.bundle.min.js"> </script>


</body>
</html>