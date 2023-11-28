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



$query = "select * from users;"; 
$results = mysqli_query($conn, $query);
$index = 0;


while ($record = mysqli_fetch_row($results)) {
    $question = array(
        'id_user' => $record[0],    
        'username' => $record[1],
        'email' => $record[2], 
        'senha' =>$record[3]
    );
    $questions[$index] = $question;
    $index++;
}


$formattedData =  json_encode($questions, JSON_PRETTY_PRINT);
echo "<pre>" . $formattedData . "</pre>";

mysqli_close($conn);


?>
