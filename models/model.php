<?php
function ouvrirconnexion(){
$host = "localhost";
$db_name = "id9263499_projet";
$username = "id9263499_prejet";
$password = "hamzauar1402";
try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
return $con;
}
function getlistfil($id_pere){
    
     $conn=ouvrirconnexion();
    $sql="select * from enfant WHERE enfant.Id_pere='".$id_pere."'";
    return($conn->query($sql));    
}
function getfil($id){
  $conn=ouvrirconnexion();
    $sql="select * from enfant where Id_enfant='".$id."'";
    return($conn->query($sql));

}
function getlistpere(){
    $conn=ouvrirconnexion();
    $sql="select * from pere where Admin=0";
    return ($conn->query($sql));
}

function getloginuser($user,$pass){
$conn=ouvrirconnexion();
$sql="select Username from pere WHERE Username='$user' and Password='".md5($pass)."'";
return $conn->query($sql)->rowCount();
}
function ajouterfilsbd($id_pere,$data){
$conn=ouvrirconnexion();
$query = "INSERT INTO enfant (`Nom_enfant`, `Prenom_enfant`, `Age_enfant`, `Id_pere`, `User_Enfant`, `Pass_Enfant`) VALUES('".$data['name']."', '".$data['prenom']."','".$data['age']."','".$id_pere."','".Enfant."".password_generate(4)."','".password_generate(5)."')";

return $conn->exec($query);
}
function ajouter_pere($info){
 $conn=ouvrirconnexion();
 $sql="INSERT INTO `pere`(`Nom_pere`, `Prenom_pere`, `Username`, `Email`, `Password`, `Age_pere`, `Addresse_pere`, `Pays_pere`, `Metier_pere`) VALUES ('".$info['nom']."','".$info['prenom']."','".$info['Username']."','".$info['email']."','".md5($info['pwd'])."','".$info['age']."','".$info['address']."','".$info['pays']."','".$info['Profession']."')";
 return($conn->exec($sql));
}
function GetPere($user){
    $conn=ouvrirconnexion();
   return $conn->query("select * from pere where Username='$user'");
}
function getpere1($id){
    $conn=ouvrirconnexion();
   return $conn->query("select * from pere where Id_pere='".$id."'");
}

function supprime($id){
    try {
    
     $con=ouvrirconnexion();
    $query = "DELETE FROM enfant WHERE Id_enfant ='".$id."'";
    $stmt = $con->prepare($query);
    
    if($stmt->execute()){
        header('Location: index.php?action=PanelUser');
    }else{
        die('Unable to delete record.');
    }
}
 
// show error
catch(PDOException $exception){
    die('ERROR: ' . $exception->getMessage());
}
}
function supprime1($id,$idpere){
    try {
    
     $con=ouvrirconnexion();
    $query = "DELETE FROM enfant WHERE Id_enfant ='".$id."'";
    $stmt = $con->prepare($query);
    
    if($stmt->execute()){
        header("Location: index.php?action=listfils&id=$idpere");
    }else{
        die('Unable to delete record.');
    }
}
 
// show error
catch(PDOException $exception){
    die('ERROR: ' . $exception->getMessage());
}
}

function supprimepere($id){
    try {
    
     $con=ouvrirconnexion();
    $query = "DELETE FROM pere WHERE Id_pere ='".$id."'";
    $stmt = $con->prepare($query);
    
    if($stmt->execute()){
        header('Location: index.php?action=listpere');
    }else{
        die('Unable to delete record.');
    }
}

// show error
catch(PDOException $exception){
    die('ERROR: ' . $exception->getMessage());
}
}
function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
  
function getpoint($data){
$conn=ouvrirconnexion();
$sql="select * from point where Id_enfant='".$data["id"]."' and

DATEDIFF('".$data["date"]."',Date_point)=0";
return ($conn->query($sql));
} 
function gettimepoint($id){
$conn=ouvrirconnexion();
$sql="select Date_point as time 
 from point where Id_point='".$id."'";
return ($conn->query($sql));
}
function getstat($name){
$conn=ouvrirconnexion();
$sql="SELECT COUNT(*) as nbr FROM ".$name."";
if($name=="pere")
$sql="SELECT COUNT(*) as nbr FROM ".$name." where active=1";

return ($conn->query($sql));

}
function updateactive($val,$id){
  $conn=ouvrirconnexion();
$sql="UPDATE `pere` SET `active`= '".$val."' WHERE Id_pere='".$id."'";
$conn->query($sql);
return ($conn->query($sql));
}

function Envoyermsgbd($email){
  $conn=ouvrirconnexion();
     // On génère un mot de passe à l'aide de la fonction RAND de PHP
                        
                        // $new_pass_crypt = crypt($new_pass, "VOTRE CLÉ UNIQUE DE CRYPTAGE DU MOT DE PASSE");

                        $objet = 'Nouveau mot de passe';
                        $to = $email;

                        //===== Création du header du mail.
                        $header = "From: Hamza EL Gannouni (Admin) <hamza.elgannouni@usmba.ac.ma
> \n";
                        $header .= "Reply-To: ".$to."\n";
                        $header .= "MIME-version: 1.0\n";
                        $header .= "Content-type: text/html; charset=utf-8\n";
                        $header .= "Content-Transfer-Encoding: 8bit";

                        //===== Contenu de votre message
                        $contenu =  "<html>".
                            "<body>".
                            "<p style='text-align: center; font-size: 18px'><b>Bonjour Mr, Mme hhhh</b>,</p><br/>".
                            "<p style='text-align: justify'><i><b>Nouveau mot de passe :6666 </b></i> </p><br/>".
                            "</body>".
                            "</html>";
                        //===== Envoi du mail
                        mail($to, $objet, $contenu, $header);
                        

}

?>