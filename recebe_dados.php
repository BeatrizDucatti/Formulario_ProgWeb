<?php

if(isset($_POST["submit"])){
    $nome = $_POST["nome"];
    $ra = $_POST["ra"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $genero = $_POST["genero"];
    $data_nascimento = $_POST["data_nascimento"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $endereco = $_POST["endereco"];


    echo "Nome: $nome";
    echo "<br/><br/>"; 
    echo "RA: $ra";
    echo "<br/><br/>";
    echo "Email: $email";
    echo "<br/><br/>";
    echo "Telefone: $telefone";
    echo "<br/><br/>";
    echo "Gênero: $genero";
    echo "<br/><br/>";
    echo "Data Nascimento: $data_nascimento";
    echo "<br/><br/>";
    echo "Cidade: $cidade";
    echo "<br/><br/>";
    echo "Estado: $estado";
    echo "<br/><br/>";
    echo "Endereço: $endereco";
    echo "<br/><br/>";

}

?>