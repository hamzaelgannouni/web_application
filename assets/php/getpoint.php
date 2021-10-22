<?php
function ouvrirconnextion(){
    $user="root";
    $password="";
   $dbaname="mysql:host=localhost;dbname=projet";
    try{
    $conn=new PDO($dbaname,$user,$password);  
}catch(PDOException  $dba){
    die("erreur de connexion au base de donne".$dba->getMessage());
}
return $conn;        
}

function getpoint($id){
    $conn=ouvrirconnextion();
    $sql="select X,Y from point where Id_enfant='".$id."'";
    return($conn->query($sql));    
}
function getlist(){
    $conn=ouvrirconnextion();
    $sql="select Nom_enfant,Prenom_enfant,Age_enfant from enfant";
    return($conn->query($sql)); 
}
function getnom(){
    $conn=ouvrirconnextion();
    $sql="select point.x,point.Y from point ,enfant WHERE point.Id_enfant=enfant.Id_enfant and enfant.Id_enfant='a1' ";
    return($conn->query($sql)); 
}

?>
