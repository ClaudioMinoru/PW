<?php 
    echo "<h1>Suas Informações foram Armazenadas!!!</h1>";
    $nome = $_REQUEST["nome"]; echo "<h3>Seu nome é: $nome </h3>";
    $endereco = $_REQUEST["endereco"]; echo"<h3>Seu endereço é: $endereco </h3>";
    $numero = $_REQUEST["numero"]; echo"<h3>O número da sua casa é: $numero </h3>";
    $cep = $_REQUEST["cep"]; echo"<h3>Seu CEP é: $cep </h3>";
    $complemento = $_REQUEST["complemento"];echo"<h3>O complemento é: $complemento </h3>";
    $bairro = $_REQUEST["bairro"];echo"<h3>Seu bairro é: $bairro </h3>";
    $cidade = $_REQUEST["cidade"];echo"<h3>Sua cidade é: $cidade </h3>";
    $estado = $_REQUEST["estado"];echo"<h3>Seu estado é: $estado </h3>";

    echo "nome: " .$_FILES["arq"]["name"] . "<br>";
    echo "tipo: " .$_FILES["arq"]["type"] . "<br>";
    echo "tamanho: " .$_FILES["arq"]["size"] . "<br>";
    echo "error: " .$_FILES["arq"]["error"] . "<br>";
    echo "diretorio temporario: " .$_FILES["arq"]["tmp_name"] . "<br>";
    $tmp = $_FILES["arq"]["tmp_name"];
    $arq = "Imagem/".$_FILES["arq"]["name"];
    
   if ( move_uploaded_file( $tmp, $arq)){
        echo "Arquivo enviado com sucesso para o servidor!!!";
    }
?>