<?php

    $nome = $_GET["nome"];
    $senha = $_GET["senha"];

    $hostname = "localhost";
    $user = "root";
    $password = "ifsp";
    $database = "doramadb";

    $conn = mysqli_connect($hostname, $user, $password, $database);

    $query = "select * from users;"; 
    $results = mysqli_query($conn, $query);

    while ($record = mysqli_fetch_row($results)) {
    $question = array(
        'id_user' => $record[0],    
        'username' => $record[1],
        'email' => $record[2], 
        'senha' =>$record[3]
      
    );
    $questions[$index] = $question;
    $index++;
    if($nome==$record[1] || $email==$record[2])
    {
        if($senha==$record[3])
        {
            echo"Entrando...";
            header("Location: http://127.0.0.1:5500/pages/index.html");
        }
    }else
    {
        header("Location: http://127.0.0.1:5500/pages/index.html#signup");

    }
    }

 

?>