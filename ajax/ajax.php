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
$id=$_POST["id"];
$val=$_POST["val"];
$sql="UPDATE `pere` SET `active`= '".$val."' WHERE Id_pere='".$id."'";
$sql1=$conn->query($sql);
?>