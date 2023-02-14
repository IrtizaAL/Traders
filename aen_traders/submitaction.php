<?php
include("connection.php");

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
elseif(isset($_POST['import1']))
{

    $filename = $_FILES["file"]["tmp_name"];

    if($_FILES["file"]["size"] > 0)
    {
        
        $file = fopen($filename, "r");

        while (($col = fgetcsv($file, 10000, ",")) !== FALSE) 
        {
           echo'<pre>'; print_r($col);

          $enter = "INSERT INTO Dr_Cr(`customer`, `order`, `date`, `account due`, `days outstanding`, `not due`, `0-30 days`, `31-60 days`, `>90 days`) VALUES ('".$col[0]."','".$col[1]."','".$col[2]."','".$col[3]."','".$col[4]."','".$col[5]."','".$col[6]."','".$col[7]."','".$col[8]."')" ;
         
       
          mysqli_query($con, $enter);

        }

$msg = '<p style="color: green;"> CSV Data inserted successfully</p>';

    }

}

if(isset($_POST['import2']))
{

    $filename = $_FILES["file"]["tmp_name"];

    if($_FILES["file"]["size"] > 0)
    {
        
        $file = fopen($filename, "r");

        while (($col = fgetcsv($file, 10000, ",")) !== FALSE) 
        {
           echo'<pre>'; print_r($col);

          $update = "INSERT INTO `sales_report`(`sales`, `cost`, `profit`, `year`, `month`) VALUES ('".$col[0]."','".$col[1]."','".$col[2]."','".$col[3]."','".$col[4]."')";


          mysqli_query($con, $update);

        }

$msg = '<p style="color: green;"> CSV Data inserted successfully</p>';

    }

}

elseif(isset($_POST['import3']))
{
	 $filename = $_FILES["file"]["tmp_name"];

    if($_FILES["file"]["size"] > 0)
    {
        
        $file = fopen($filename, "r");

        while (($col = fgetcsv($file, 10000, ",")) !== FALSE) 
        {
           echo'<pre>'; print_r($col);

          $add = "INSERT INTO `purchase report`(`category`, `item Code`, `jan-20`, `feb-20`, `mar-20`) VALUES ('".$col[0]."','".$col[1]."','".$col[2]."','".$col[3]."','".$col[4]."')";
       
          mysqli_query($con, $add);

        }

$msg = '<p style="color: green;"> CSV Data inserted successfully</p>';

    }

}
if(isset($_POST['import4']))
{
	 $filename = $_FILES["file"]["tmp_name"];

    if($_FILES["file"]["size"] > 0)
    {
        
        $file = fopen($filename, "r");

        while (($col = fgetcsv($file, 10000, ",")) !== FALSE) 
        {
           echo'<pre>'; print_r($col);

          $plus = "INSERT INTO `cash_bank_report`(`details`, `cash in`, `cash out`, `balance`) VALUES ('".$col[0]."','".$col[1]."','".$col[2]."','".$col[3]."')";
       
          mysqli_query($con, $plus);

        }

$msg = '<p style="color: green;"> CSV Data inserted successfully</p>';

    }

}
?>