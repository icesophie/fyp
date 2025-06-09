<!DOCTYPE html>
<html>


<head>
<title>ADD PALM PLANTATIONS</title>
    <link rel="stylesheet" type="text/css" href="">

   

 <script type = "text/javascript"><style>


</script>
</head>
</html>

<?php 
include ('connect.php');

    $palmID = $_POST['palmID'];
    $size = $_POST['size'];
    $address =$_POST['address'];
    $ownerID =$_POST['ownerID'];




    $sql = "INSERT INTO palmplantation (palmID, size, address, ownerID) VALUES ( '$palmID', '$size', '$address', '$ownerID')" or die ("error inserting data into table");

    if ($conn->query($sql) === TRUE)
    {
        echo "<script type='text/javascript'>alert('CUSTOMER DETAILS SUCCESSFULLY INSERTED !'); </script>";
        echo "<meta http-equiv=\"refresh\" content=\"1;URL=display-palm.php\">";



    }
    else if ($conn->query($sql) === FALSE) 
    {
        echo "<script type='text/javascript'>alert('REPEATED PALM ID ,USE ANOTHER ID!'); </script>";
        echo "<meta http-equiv=\"refresh\" content=\"1;URL=display-palm.php\">";
        echo "<h4>THE DATA IS REDUNDANT !!!!</h4>";
    }

    else
    {
        echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
    }

$conn->close();
?>