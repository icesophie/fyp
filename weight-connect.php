!DOCTYPE html>
<html>


<head>
<title>ADD WEIGHT</title>
    <link rel="stylesheet" type="text/css" href="">

   

 <script type = "text/javascript"><style>


</script>
</head>
</html>

<?php
include ('connect.php');

    $no =$_POST['no'];
    $lorryplatenum = $_POST['lorryplatenum'];
    $date = $_POST['date'];
    $month = $_POST['month'];
    $time =$_POST['time'];
    $palmID =$_POST['palmID'];
    $ownerID =$_POST['ownerID'];
    $weightoflorryandpalm =$_POST['weightoflorryandpalm'];
    $weightofpalm =$_POST['weightofpalm'];




    $sql = "INSERT INTO weight (no, lorryplatenum, date, month,  time, palmID, ownerID, weightoflorryandpalm, weightofpalm) VALUES ( '$no','$lorryplatenum', '$date','$month', '$time', '$palmID', '$ownerID', '$weightoflorryandpalm', '$weightofpalm')" or die ("error inserting data into table");

    if ($conn->query($sql) === TRUE)
    {
        echo "<script type='text/javascript'>alert('WEIGHT OF PALM  SUCCESSFULLY INSERTED !'); </script>";
        echo "<meta http-equiv=\"refresh\" content=\"0;URL=display-weight.php\">"; 


    }
    else if ($conn->query($sql) === FALSE) 
    {
        echo "<script type='text/javascript'>alert('REPEATED WEIGHT ID ,USE ANOTHER ID!'); '</script>";
        echo "<meta http-equiv=\"refresh\" content=\"0;URL=display-weight.php\">"; 
        echo "<h4>THE DATA IS REDUNDANT !!!!</h4>";
    }

    else
    {
        echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
    }

$conn->close();


?>