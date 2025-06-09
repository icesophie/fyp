<?php
// Establish database connection
include("connect.php");

// Retrieve updated data
$ownerID = $_POST['ownerID'];
$name = $_POST['name'];
$identitycard = $_POST['identitycard'];

// Validate and sanitize input if needed

// Construct and execute the SQL UPDATE query
$sql = "UPDATE owner SET name = '$name', identitycard = '$identitycard' WHERE ownerID = '$ownerID'";

if ($conn->query($sql) === TRUE) {
    echo "<script>
                alert('Successfully updated owner record');
            </script>";
        echo "<meta http-equiv=\"refresh\" content=\"1;URL=display-owner.php\">";
} else {
        echo "<script>
                alert('Fail to update owner record');
            </script>";
        echo "<meta http-equiv=\"refresh\" content=\"1;URL=display-owner.php\">";
    }

// Close the database connection
$conn->close();
?>
