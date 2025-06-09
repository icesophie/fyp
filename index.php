<?php 

session_start();
$position =  $_SESSION['position'] ;
$staffID =  $_SESSION['staffID'];



?>

<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Invoice Management System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="css/userstyle.css">

</head>

<body class="hold-transition skin-green sidebar-mini">


      <?php if($position == 'Manager'){

        include("head-manager.php");
      ?>

      <?php 
      }
      elseif($position == 'Clerk')
      {
        include("head-clerk.php");
    ?>

    <?php 
      }
      elseif($position == 'Worker')
      {
        include("head-labor.php");
    ?>

    
      
    <?php 
    }

    include("footer.php");
    ?>
    


