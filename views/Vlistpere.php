  <!--  SIDEBAR - END -->

            <!--  SIDEBAR - END -->
            <!-- START CONTENT -->
            <section id="main-content" class=" ">
                <section class="wrapper" style='margin-top:60px;display:inline-block;width:100%;padding:15px 0 0 15px;'>

                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <div class="page-title">

                            <div class="pull-left">
                                <h1 class="title">Liste des parents</h1>                            </div>


                        </div>
                    </div>
                    <!--- menu hamza-->
                    <!-- container -->
                    <script type="text/javascript">
                        function ajax(val,id){
                            $.ajax({
                                type : 'post',
                                url: 'ajax/ajax.php',
                                data:{val:val,id:id},
                                success:function(resulta){
                                    console.log(resulta);
                                }



                            });
                         

                        }

                    </script>
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
         echo "<th>action</th>";
        echo "<th>active/deactivate</th>";
        
    echo "</tr>";
     
    
// select all data

$stmt = $pere;

 
// this is how to get number of rows returned
$num = $stmt->rowCount();
 
// link to create record form

 
//check if more than 0 record found
if($num>0){
 
    // data from database will be here
     
}
 
// if no records found
else{
    echo "<div class='alert alert-danger'>No records found.</div>";
}

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
        echo "<td>{$Id_pere}</td>";
        echo "<td>{$Nom_pere}</td>";
        echo "<td>{$Prenom_pere}</td>";
        echo "<td>{$Age_pere}</td>";
        echo "<td>";
             
            // we will use this links on next part of this post
            echo "<a href='index.php?action=listfils&id={$Id_pere}'  class='btn btn-info m-r-1em'>liste des fils</a>";
            echo "<a href='index.php?action=updatepere&id={$Id_pere}' class='btn btn-primary m-r-1em'>Modifier</a>";
            // we will use this links on next part of this post
    
            echo "<a href='index.php?action=supprimepere&id={$Id_pere}'  class='btn btn-danger'>supprime</a>";
        echo "</td>";

        echo "<td>";
    // activate button
    $activateButton = '';
    if ($active==1) {
            $activateButton = "<input type='checkbox' class='iswitch iswitch-md iswitch-success'  onchange='ajax(0,{$Id_pere})' checked >";
    } elseif ($active == 0) {
            $activateButton = "<input type='checkbox' onchange='ajax(1,{$Id_pere})' class='iswitch iswitch-md iswitch-success'";
    }
           
            echo $activateButton ;

        
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
    </div> <!-- end .container -->