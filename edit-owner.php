<?php
session_start();
include("head-clerk.php");
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the updated owner information from the form
    $ownerID = $_POST['ownerID'];
    $updatedName = $_POST['name'];

    // Call the stored procedure to update the name
    $sql = "CALL UpdateName(?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("is", $ownerID, $updatedName);
    $stmt->execute();
    $stmt->close();

    // Redirect or display a success message
    // ...
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Owner</title>
</head>
<body class="updateowner">
<section>
    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id']; // Assuming you have validated and sanitized the input

        $stmt = $conn->prepare("SELECT * FROM owner WHERE ownerID = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<center><h3>OWNER DETAILS</h3></center>";
                echo "<table border='1' width='40%' align='center'>";
                echo "<form method='POST' action='update-owner.php'>";
                echo "<tr><th>OWNER ID</th><td><input type='text' name='ownerID' value='" . $row['ownerID'] . "' readonly></td></tr>";
                echo "<tr><th>NAME</th><td><input type='text' name='name' value='" . strtoupper($row['name']) . "'></td></tr>";
                echo "<tr><th>IDENTITY CARD</th><td><input type='text' name='identitycard' value='" . $row['identitycard'] . "'></td></tr>";
                echo "<tr><td colspan='2'><input type='submit' name='submit' value='UPDATE'></td></tr>";
                echo "</form>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
    }
    ?>
</section>

<?php
$conn->close();
include("footer.php");
?>
</body>
</html>
