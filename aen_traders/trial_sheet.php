<?php
require("connection.php");
?>

<!DOCTYPE html>
<html>
    <head>
      <title>AEN_Traders</title>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
      </script>

    </head>
    <body>
        <div class="container">
          <div class="row" align="center" style="margin-top: 70px;">
              <div class="col-sm-3"></div>
              <div class="col-sm-6">
                    <h2>Import excel data into Database</h2><br>

                    <!-- Success message print here -->
                    


     <form method="post" action="submitaction.php" enctype='multipart/form-data'>
         <input type='file' name='file' class="form-control" /><br>
     <button name="import">Upload</button>
            </form>
              </div> 
              <div class="col-sm-3"></div>
          </div>        
        </div>
    </body>
</html>

<?php 
 

if(isset($_POST['import']))
{

    $filename = $_FILES["file"]["tmp_name"];

    if($_FILES["file"]["size"] > 0)
    {
        
        $file = fopen($filename, "r");

        while (($col = fgetcsv($file, 10000, ",")) !== FALSE) 
        {
           echo'<pre>'; print_r($col);

          $insert = "INSERT INTO trial_balance(`details`, `debit`, `credit`) VALUES ('".$col[0]."','".$col[1]."','".$col[2]."')";
       
          mysqli_query($con, $insert);

        }

$msg = '<p style="color: green;"> CSV Data inserted successfully</p>';

    }

}

?>