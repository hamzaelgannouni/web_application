<!DOCTYPE HTML>
<html>
<head>
    <title>PDO - Create a Record - PHP CRUD Tutorial</title>
    
     <link href="assets\css\menustyle.css" rel="stylesheet" type="text/css"/>
      
    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
          
</head>
<body>
  
    <!-- container --><br/><br/><br/>
    <div class="container" style="padding: 0px 0px 0px 200px">
   
        <div class="page-header">
            <h1>AJOUTER FILS</h1>
        </div>
      
    <!-- html form to create product will be here -->
        <!-- PHP insert code will be here -->
<!-- html form here where the product information will be entered -->
<form action="index.php?action=AjouteFilsbd" method="post">
    <table class='table table-hover table-responsive table-bordered'>
        <tr>
            <td>Nom</td>
            <td><input type='text' name='name' class='form-control' /></td>
        </tr>
        <tr>
            <td>Prenom</td>
            <td>
            <input type='text' name='prenom' class='form-control' value="<?php echo htmlspecialchars($prenom, ENT_QUOTES);  ?>" />
            </td>
        </tr>
        <tr>
            <td>Age</td>
            <td><input type='text' name='age' class='form-control' /></td>
        </tr>
       
       
        <tr>
            <td></td>
            <td>
                <input type='submit' value='Save' class='btn btn-primary' />
                <a href='index.php?action=PanelPere' class='btn btn-danger'>Back to Panel</a>
            </td>
        </tr>
    </table>
</form>
          
    </div> <!-- end .container -->
      
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   
<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</body>
</html>