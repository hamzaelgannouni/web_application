F<?php 
session_start();
include 'views/view.php';
include 'controllers/controller.php';
include 'models/model.php';
$action=(empty($_GET["action"]))?"accueil":$_GET["action"];
$actionlogin=isset($_SESSION["user"])?"PanelPere":$action;
switch($action){
	case 'accueil':
	AfficheTemplet("templet");
	break;
	case 'login':
     AfficheTemplet("templet_login");
	break;
	case 'register':
	AfficheTemplet("templet_register");
	break;
	case 'VerifierLogin':
	authentifierUser($_POST);
	break;
    case 'PanelUser':
    if(isset($_SESSION["id"]) && isset($_SESSION["Admin"]) && $_SESSION["Admin"]==0){
     $_SESSION["action"]="PanelUser";
     if($_SESSION["active"]==1){
     AffichePanelPere();
     }else{
      affichemsg($_SESSION["nom"]);
     }
    }else{
    AfficheTemplet("templet_login");
    }
	break;
	case 'PanelAdministrateur':
	if(isset($_SESSION["id"]) && isset($_SESSION["Admin"]) && $_SESSION["Admin"]==1){
     $_SESSION["action"]="PanelAdministrateur";
     AffichePanelAdmin();
	}  else{
     AfficheTemplet("templet_login");
    }
	break;
	case 'deconnexion':
	deconnexion();
	break;
	case 'AjouteFils':
    ajouterfils();
    break;
    case 'AjouteFilsbd':
    AjouterFils1($_POST);
    break;
    case 'VerfieaAjouter':
    VerfieaAjouter($_POST);
    break;
    case 'modifie':
    Modifie($_GET["id"]);
    break;
    case 'supprimer':
    Supprimer($_GET["id"]);
    break;
    case 'profile':
    actionprofile($_SESSION["user"]);
    break;
    case 'suivezfils':
    if(isset($_POST["date"])){
    $_POST["id"]=$_GET["id"];
    actionpointdate($_POST);
    }else{
    $data1["id"]=$_GET["id"];
    $data1["date"]=date("Y/m/d");
    actionpointdate($data1);
    }
    break;
    case 'listpere':
    actionlistpere();
    break;
    case 'supprimepere':
    supprimerpere($_GET["id"]);
    break;
    case 'updatepere':
    Modifiepere($_GET["id"]);
    break;
    case 'listfils':
    actionlistfils($_GET["id"]);
    break;
    case 'affichemail':
    affichemail();
    break;
    case 'affichemailpere':
    affichemailpere();
    break;
    case 'RecupeMotdePasse':
    actionRecupeMot();
    break;
    case 'Envoyermsg':
    actionEnvoyermsg($_POST["email1"]);
    break;
    case 'supprimer1':
    actionsupprime1($_GET["id"],$_GET["idpere"]);
    break ;
	default:
	AfficheTemplet("templet");
	break;
}



?>
