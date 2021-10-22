<?php

if ($_SERVER['REQUEST_METHOD']=='POST') {


    $email = $_POST['email'];
    $password1 = $_POST['password'];

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
    $sql = "SELECT * FROM `enfant` WHERE `User_Enfant`='".$email."'";
    $response=$conn->query($sql);
    $result = array();
    $result['login'] = array();

 
    if ($response->rowCount()===1) {
           
        $row = $response->fetch();
        if ($password1==$row["Pass_Enfant"]) {
         $res=$conn->query("select * from pere where Id_pere='".$row['Id_pere']."'");
         $row1=$res->fetch();
            $index['nompere']=$row1['Nom_pere'];
            $index['prenompere']=$row1['Prenom_pere'];
            $index['name'] = $row['Nom_enfant'];
            $index['email'] = $row['Prenom_enfant'];
            $index['age'] = $row['Age_enfant'];
            $index['id']=$row['Id_enfant'];
           

            array_push($result['login'], $index);

            $result['success'] = "1";
            $result['message'] = "success";
            echo json_encode($result);

            mysqli_close($conn);

        } else {


            $result['success'] = "0";
            $result['message'] = "error";
            echo json_encode($result);

            mysqli_close($conn);

        }

    }else{



    }

}

?>