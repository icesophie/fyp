<!DOCTYPE html>
<html>


<head>
<title>ADD OWNER</title>
    <link rel="stylesheet" type="text/css" href="">

   

 <script type = "text/javascript"><style>


</script>
</head>
</html>

<?php 
include ('connect.php');

    $ownerID = $_POST['ownerID'];
    $name = $_POST['name'];
    $identitycard =$_POST['identitycard'];



    $sql = "INSERT INTO owner (ownerID, name, identitycard) VALUES ( '$ownerID', '$name', '$identitycard')" or die ("error inserting data into table");

    if ($conn->query($sql) === TRUE)
    {
        echo "<script type='text/javascript'>alert('OWNER PLANTATION ID SUCCESSFULLY INSERTED !'); document.location='customer-add.php'</script>";


    }
    else if ($conn->query($sql) === FALSE) 
    {
        echo "<script type='text/javascript'>alert('OWNER ID RECORD ALREADY IN THE DATA,USE ANOTHER ID!'); document.location='customer-add.php'</script>";
        echo "<h4>RECORD ALREADY IN THE DATA !!!!</h4>";
    }

    else
    {
        echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
    }

$conn->close();
?>