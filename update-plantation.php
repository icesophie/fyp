<?php
// Establish database connection
include("connect.php");

// Retrieve updated data
$palmID = $_POST['palmID'];
$size = $_POST['size'];
$address = $_POST['address'];
$ownerID = $_POST['ownerID'];

// Validate and sanitize input if needed

// Construct and execute the SQL UPDATE query
$sql = "UPDATE palmplantation SET size = '$size', address = '$address', ownerID = '$ownerID' WHERE palmID = '$palmID'";

if ($conn->query($sql) === TRUE) {
    if ($conn->affected_rows > 0) {
        echo "<script>
                alert('Successfully updated palm record');
            </script>";
        echo "<meta http-equiv=\"refresh\" content=\"1;URL=display-palm.php\">";
    } else {
        echo "<script>
                alert('No records were updated');
            </script>";
        echo "<meta http-equiv=\"refresh\" content=\"1;URL=display-palm.php\">";
    }
} else {
    echo "<script>
            alert('Error updating palm record: " . $conn->error . "');
        </script>";
    echo "<meta http-equiv=\"refresh\" content=\"1;URL=display-palm.php\">";
}

// Close the database connection
$conn->close();
?>
