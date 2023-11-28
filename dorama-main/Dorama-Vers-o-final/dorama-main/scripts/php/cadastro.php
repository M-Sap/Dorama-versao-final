<?php
    echo 'Rodando';

    $nome = $_GET["nome"];
    $email = $_GET["email"];
    $senha = $_GET["senha"];


    echo 'Nome '. $nome;
    echo 'Email '. $email;
    echo 'Senha '. $senha;

    $hostname = "localhost";
    $user = "root";
    $password = "ifsp";
    $database = "doramadb";

    $conn = mysqli_connect($hostname, $user, $password, $database);

    if (!$conn) {
        die("Conexão falhou: " . mysqli_connect_error());
    }
    echo "Conexão feita com sucesso";

    $query = "insert into users (username, password, email)
    values ('$nome', '$senha', '$email')";

  
    $res = mysqli_query($conn, $query);
    header("Location: http://localhost:5000/scripts/php/consulta.php");

?>