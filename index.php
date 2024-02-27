<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
    <link rel="stylesheet" href="stylephp.css">
</head>
<body>
    
    <?php 

        $nome = $_GET["nome"];
        $sobrenome = $_GET["sobrenome"];

        echo "<h1 id='h1_nome'> Bem Vindo de Volta $nome $sobrenome! </h1>";

        echo "<div id='div_link'>

            <a href='javascript:history.go(-1)' id='link_a'>
            Voltar para a página anterior
            </a>

        </div>";
    ?>



</body>
</html>