<!DOCTYPE HTML>
<html>
<head>
    <title>PDO - Update a Record - PHP CRUD Tutorial</title>
     
    <!-- Latest compiled and minified Bootstrap CSS -->
         <link href="assets\css\menustyle.css" rel="stylesheet" type="text/css"/>

         
</head>
<body>
 
    <!-- container -->
    <div class="container"style="padding: 50px 0px 0px 200px">
  
        <div class="page-header">
            <h1>Modifier les informations</h1>
        </div>
     
        <!-- PHP read record by ID will be here -->
        <?php

$id=isset($_GET['id']) ? $_GET['id'] : die('ERROR: Record ID not found.');
 
        $con=ouvrirconnexion();
 

try {
  
    
    $query = "SELECT id, name, description, price FROM products WHERE id = ? LIMIT 0,1";
    $stmt = $con->prepare( $query );
     
    // this is the first question mark
    $stmt->bindParam(1, $id);
     
    // execute our query
    $stmt->execute();
     
    // store retrieved row to a variable
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
     
    // values to fill up our form
    $name = $row['name'];
    $description = $row['description'];
    $price = $row['price'];
}
 
catch(PDOException $exception){
    die('ERROR: ' . $exception->getMessage());
}
?>
 
        <!-- HTML form to update record will be here -->
        <!-- PHP post to update record will be here -->
 
<!--we have our html form here where new record information can be updated-->
<form action="index.php?action=modifie&id=<?=$id?>" method="post">
    <table class='table table-hover table-responsive table-bordered'>
        <tr>
            <td>Nom</td>
            <td><input type='text' name='name' value="<?php echo htmlspecialchars($pere['Nom_pere'], ENT_QUOTES);  ?>" class='form-control' /></td>
        </tr>
        <tr>
            <td>Prenom</td>
            <td>
                <input type='text' name='description' value="<?php echo htmlspecialchars($pere['Prenom_pere'], ENT_QUOTES);  ?>" class='form-control' />
            </td>
                
        </tr>
        <tr>
            <td>Age</td>
            <td><input type='text' name='price' value="<?php echo htmlspecialchars($pere['Age_pere'], ENT_QUOTES);  ?>" class='form-control' /></td>
        </tr>
                <tr>
            <td>Email</td>
            <td><input type='text' name='name' value="<?php echo htmlspecialchars($pere['Email'], ENT_QUOTES);  ?>" class='form-control' /></td>
        </tr>
        <tr>
            <td>addresse</td>
            <td>
                <input type='text' name='description' value="<?php echo htmlspecialchars($pere['Addresse_pere'], ENT_QUOTES);  ?>" class='form-control' />
            </td>
                
        </tr>
        <tr>
            <td>Metier</td>
            <td><input type='text' name='price' value="<?php echo htmlspecialchars($pere['Metier_pere'], ENT_QUOTES);  ?>" class='form-control' /></td>


        <tr>
            <td></td>
            <td>
                <input type='submit' value='Save Changes' class='btn btn-primary' />
                <a href='index.php?action=listpere' class='btn btn-danger'>Back to read products</a>
            </td>
        </tr>
    </table>
</form>
        <?php
 
// check if form was submitted
if($_POST){
     
    try{

        // write update query
        // in this case, it seemed like we have so many fields to pass and 
        // it is better to label them and not use question marks
        
        $name=htmlspecialchars(strip_tags($_POST['name']));
        $Prenom=htmlspecialchars(strip_tags($_POST['description']));
        $age=htmlspecialchars(strip_tags($_POST['price']));
        $query = "UPDATE enfant 
                    SET Nom_enfant='".$name."', Prenom_enfant='".$Prenom."', Age_enfant='".$age."' 
                    WHERE id_enfant ='".$id."'";
        // prepare query for excecution
        $stmt = $con->prepare($query);
 
        

        // Execute the query
        if($stmt->execute()){
            echo "<div class='alert alert-success'>Record was updated.</div>";
        }else{
            echo "<div class='alert alert-danger'>Unable to update record. Please try again.</div>";
        }
         
    }
     
    // show errors
    catch(PDOException $exception){
        die('ERROR: ' . $exception->getMessage());
    }
}
?>
         
    </div> <!-- end .container -->
     
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   
<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
</body>
</html>