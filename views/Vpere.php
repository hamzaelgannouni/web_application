
         
            <!-- START CONTENT -->
            <section id="main-content" class="@bnbjgj ">

                <section class="wrapper" style='margin-top:60px;display:inline-block;width:100%;padding:15px 0 0 15px;'>

                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <div class="page-title">

                            <div class="pull-left">
                                <h1 class="title">Dashboard</h1>                            </div>


                        </div>
                    </div>
                    <!--- menu hamza-->
                    <!-- container -->
    <div class="container">
  
        <div class="page-header">
            
        </div>
         
     

        <!-- PHP code to read records will be here -->
         <?php
// include database connection

 
echo "<table id='example-1' class='table table-striped dt-responsive display' cellspacing='0' width='100%' class='table table-hover table-responsive table-bordered'>";//start table
 
    //creating our table heading
    echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Nom</th>";
        echo "<th>Prenom</th>";
        echo "<th>Age</th>";
        echo "<th>Action</th>";
    echo "</tr>";
     
    
// select all data

$stmt = getlistfil($pere["Id_pere"]);

 
// this is how to get number of rows returned
$num = $stmt->rowCount();
 
// link to create record form
echo "<a href='index.php?action=AjouteFils' class='btn btn-primary m-b-1em' >Ajouter Enfant</a></br>";
 
//check if more than 0 record found
if($num>0){
 
    // data from database will be here    
}
 
// if no records found
else{
    echo "<div class='alert alert-danger'>Il n'y a pas d'enfant inscrit.</div>";
}
$i=0;
        // table body will be here
        // retrieve our table contents
// fetch() is faster than fetchAll()
// http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    
    // extract row
    // this will make $row['firstname'] to
    // just $firstname only
    extract($row);
     
    // creating new table row per record
    echo "<tr>";
        echo "<td>{$Id_enfant}</td>";
        echo "<td>{$Nom_enfant}</td>";
        echo "<td>{$Prenom_enfant}</td>";
        echo "<td>{$Age_enfant}</td>";
        echo "<td>";
            // read one record 
            echo "<a href='index.php?action=suivezfils&id={$Id_enfant}' class='btn btn-info m-r-1em'>Suivez votre fils</a>";
             
            // we will use this links on next part of this post
            echo "<a href='index.php?action=modifie&id={$Id_enfant}' class='btn btn-primary m-r-1em'>Modifier</a>";
            // we will use this links on next part of this post
    
            echo "<a href='index.php?action=supprimer&id={$Id_enfant}'  class='btn btn-danger'>supprimer</a>";
$i++;
            ?>

 
    <a id="modal_trigger<?=$i?>" href="#modal<?=$i?>" class="btn btn-secondary">Configurer votre application Android</a>

    <div id="modal<?=$i?>" class="popupContainer" style="display:none;">
        <header class="popupHeader">
            <span class="header_title">les informations pour identifier l'application:</span>
            <span class="modal_close"><i class="fa fa-times"></i></span>
          
        </header>
        <?php 
        $fil=getfil($Id_enfant)->fetch();
        ?>
        <section class="popupBody">
            <div dir="ltr" style="text-align: left;" trbidi="on">
<b></b>
<a href="" imageanchor="1" style="clear: right; float: right; margin-bottom: 1em; margin-left: 1em;"><img border="0" src="assets\images\screenshot1.jpg" style="height: 330px;width: 230px;margin: 0px 50px 0px 0px;" /></a><b><span style="font-size: large;"><br /></span></b><span style="font-size: large;"><b>User_Enfant:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</b></span><br />
<span style="font-size: large;"><b><br /></b></span>
<span style="font-size: large;"><b>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<?=$fil["User_Enfant"]?>
</b></span><br />
<span style="font-size: large;"><b><br /></b></span>
<b><span style="font-size: large;">Password:</span></b><br />
<b><span style="font-size: large;">&nbsp; &nbsp;</span></b><br />
<b><span style="font-size: large;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<?=$fil["Pass_Enfant"]?>
</span></b></div>
<script type="text/javascript">
    $("#modal_trigger<?=$i?>").leanModal({top : 200, overlay : 0.6, closeButton: ".modal_close" });
</script> 
        </section>
    </div>




<?php
        
        echo "</td>";
    echo "</tr>";
  }

// end table
echo "</table>";
        $action = isset($_GET['action']) ? $_GET['action'] : "";
 
// if it was redirected from delete.php
if($action=='deleted'){
    echo "<div class='alert alert-success'>Record was deleted.</div>";
}
        
        ?>
      


  <center>
  	<button class="btn btn-primary active" style="background-color:#0A0B0E  ;">   telecharger application android apk:</button><a href="https://archive.org/download/ProjetHamzaSimo/Projet_Hamza_simo.apk" imageanchor="1" ><img border="0" src="assets\images\download.png" style="width: 200px;"/></a></center>
