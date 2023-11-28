<?php

    $pesquisa = $_GET["searchbar"];

    echo $pesquisa;


    $hostname = "localhost";
    $user = "root";
    $password = "ifsp";
    $database = "doramadb";

    $conn = mysqli_connect($hostname, $user, $password, $database);

    $query = "select * from doramas where nome_dorama='$pesquisa';"; 
    $results = mysqli_query($conn, $query);

    $index = 0;
    while ($record = mysqli_fetch_row($results)) {
        $dorama = array(   
            'nome_dorama' => $record[1]
        );
        $doramas[$index] = $dorama;
        $index++;
    };
    $formattedData =  json_encode($doramas, JSON_PRETTY_PRINT);
    echo "<pre>" . $formattedData . "</pre>";

  

?>