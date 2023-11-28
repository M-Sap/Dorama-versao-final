<?php


    $hostname = "localhost";
    $user = "root";
    $password = "ifsp";
    $database = "doramadb";

    $conn = mysqli_connect($hostname, $user, $password, $database);


    if (!$conn) {
        die("Conexão falhou: " . mysqli_connect_error());
    }
    echo "Conexão feita com sucesso";


    $email = $_POST["email"];


    $query = "SELECT * FROM users WHERE email='" . $email . "';";

    $results = mysqli_query($conn, $query);

    while ($record = mysqli_fetch_row($results)) {
        $u = array(
            'id_user' => $record[0],    
            'username' => $record[1],
            'email' => $record[2], 
            'senha' =>$record[3]
        );
        $user = $u;
    }

    $deleteQuery = "DELETE FROM users WHERE email='". $user['email'] . "';";

    var_dump(mysqli_query($conn, $deleteQuery));
    $results = mysqli_query($conn, $deleteQuery);

    if ($results) {
        echo 'Usuario Deletado';
    } else {
        echo 'Erro ao deletar usuario';
    }

?>