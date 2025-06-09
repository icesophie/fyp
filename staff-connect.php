

<?php 
include ('connect.php');

    $staffID = $_POST['staffID'];
    $name = $_POST['name'];
    $position =$_POST['position'];
    $password =$_POST['password'];



    $sql = "INSERT INTO staff (staffID, name, position, password) VALUES ( '$staffID', '$name', '$position', '$password')" or die ("error inserting data into table");

    if ($conn->query($sql) === TRUE)
    {
        echo "<script type='text/javascript'>alert('STAFF PLANTATION ID SUCCESSFULLY INSERTED !'); document.location='confirmregister.php'</script>";


    }
    else if ($conn->query($sql) === FALSE) 
    {
        echo "<script type='text/javascript'>alert('STAFF ID RECORD ALREADY IN THE DATA,USE ANOTHER ID!'); document.location='confirmregister.php'</script>";
        echo "<h4>RECORD ALREADY IN THE DATA !!!!</h4>";
    }

    else
    {
        echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
    }

$conn->close();
?>