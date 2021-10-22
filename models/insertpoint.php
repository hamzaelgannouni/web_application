<?php
$host = "localhost";
$db_name = "id9263499_projet";
$username = "id9263499_prejet";
$password = "hamzauar1402";
try {
    $conn = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
$x=$_GET["x"];
$y=$_GET["y"];
$id=$_GET["id"];
$conn->exec("INSERT INTO `point`(`X`, `Y`, `Date_point`, `Id_enfant`) VALUES ('".$x."','".$y."',SYSDATE(),'".$id."')");


?>