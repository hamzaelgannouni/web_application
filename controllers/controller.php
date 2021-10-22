<?php

function AfficheTemplet($filenom){
Afficheview($filenom);
}
function AffichePanelPere(){
	$data1["pere"]=GetPere($_SESSION["user"])->fetch();
	$data1["fils"]=getlistfil($_SESSION["id"]);
	AfficheViewPanel("Vpere",$data1);
}


function AffichePanelAdmin(){

  $data1["admin"]=GetPere($_SESSION["user"])->fetch();
  $data1["Nomberpere"]=getstat("pere")->fetch()["nbr"];
  $data1["Nombrefils"]=getstat("enfant")->fetch()["nbr"];
  $data1["Nombrepoint"]=getstat("point")->fetch()["nbr"];
  AfficheViewPanel1("Vadministrateur",$data1);
}


function authentifierUser($data){

 
   
   if(isset($_COOKIE["Username"])&& isset($_COOKIE["Password"])){
   if(getloginuser($_COOKIE["Username"],$_COOKIE["Password"])){
  $_session["user"]=$_COOKIE["Username"];
  $_session["id"]=getid($_COOKIE["Username"]);
        $_SESSION=verfieadmin($_SESSION["Id_pere"])->fetch();
   if(!$_session["Admin"]){

  header("location:index.php?action=PanelAdministrateur") ; 
  }else{
  header("location:index.php?action=PanelUser") ;
  }  
  
   }else{
   	header("location:index.php?action=login");
   }

   }else{
    if(isset($data["user"]) && isset($data["pass"])){
   if(getloginuser($data["user"],$data["pass"])){
       $datauser=getpere($data["user"])->fetch();
       $_SESSION["user"]=$datauser["Username"];
       $_SESSION["nom"]=$datauser["Nom_pere"];
       $_SESSION["prenom"]=$datauser["Prenom_pere"];
       $_SESSION["id"]=$datauser["Id_pere"];
       $_SESSION["Admin"]=$datauser["Admin"];
       $_SESSION["active"]=$datauser["active"];

if($_SESSION["Admin"]==1){

  header("location:index.php?action=PanelAdministrateur") ; 
  }else{
  header("location:index.php?action=PanelUser") ;
  }  
 }else{
	header("location:index.php?action=login");
        }
 }
}

}
function deconnexion(){
	session_destroy();
	header("location: index.php?action=login");}
function ajouterfils(){
AfficheViewPanel("Vcreate", $_SESSION);
}
function AjouterFils1($data1){
$data["bool"]=ajouterfilsbd($_SESSION["id"],$data1);
header("location: index.php?action=PanelUser");
}
function VerfieaAjouter($data){
if(ajouter_pere($data)){
   
    Affichemsgereur("Vmsg",$data["nom"],"Merci pour Enregistrer dans le site web .Attendez que votre compte soit activé");
}else{
Affichemsgereur("Vmsg","il ya une ","erreur");
}
}
function modifie($data){
  $data1=getfil($data)->fetch();
AfficheViewPanel("Vmodifie",$data1);
}
function Supprimer($id){
supprime($id);
}
function supprimerpere($id){
  supprimepere($id);
}
function actionsupprime1($id,$idpere){
supprime1($id,$idpere);
}
 function actionprofile($user){

  $data["pere"]=GetPere($user);
   AfficheViewPanel("Vprofile",$data); 
 }
 
 function actionpointdate($data){
  $data1["point"]=getpoint($data)->fetchall();
 $data1["time"]=gettimepoint($data["id"])->fetchall();
 $data1["fils"]=getfil($data["id"])->fetch();
 AfficheViewPanel("Vmaps",$data1);
 }
 function actionlistpere(){

  $data["pere"]=getlistpere();
 AfficheViewPanel1("Vlistpere",$data);  

 }
 function actionlistfils($id){
  $data["pere"]=GetPere1($id)->fetch();
  $data["fils"]=getlistfil($id);
 AfficheViewPanel1("Vlistfilspere",$data);
}
function affichemsg($data){
  Affichemsgereur("Vmsg",$data,"Merci pour Enregistrer dans le site web .Attendez que votre compte soit activé ");
}
function affichemail(){

  AfficheViewPanel("Vmail");
}
function affichemailpere(){
  AfficheViewPanel1("Vmail");
}
function Modifiepere($id){
  $data["pere"]=getpere1($id)->fetch();
  AfficheViewPanel1("Vmodifiepere",$data);
}
function actionRecupeMot(){
  Affichemsgereur("vmsg","","        <div>Entre addresse email :</div>
        <form action ='index.php?action=Envoyermsg'method='post'>
              <div class='input-group'>
                                                                    <span class='input-group-addon'>
                                                                        <span class='arrow'></span>
                                                                        <i class='fa fa-envelope'></i>     
                                                                    </span>
                                                                    <input type='email' name='email1' class='form-control' placeholder='Your Email' id='inputEmail2' value=''>
                                                                </div>


            <button type='submit' name='oublie' class='btn btn-purple '>Envoyer</button>
        </form>");

}
function actionEnvoyermsg($email){
  Envoyermsgbd($email);
  Affichemsgereur("vmsg","","votre mot de passe a été envoyé à l'adresse email que vous avez saisi");
}

