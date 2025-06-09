<?php
session_start();
include("head-clerk.php");
include("connect.php");

?>

<html>
<head>
    <title>Edit Palm</title>
</head>
<body class="updatepalm">
<section>
    <?php

        $id = $_GET['id']; // Assuming you have validated and sanitized the input

        $stmt = $conn->prepare("SELECT * FROM palmplantation WHERE palmID = ?");
        $stmt->bind_param("s", $id);
        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows > 0) 
        {
            // Output data of each row
            while ($row = $result->fetch_assoc()) 
            {
                echo "<center><h3>PLANTATION DETAILS</h3></center>";
                echo "<table border='1' width='40%' align='center'>";
                echo "<form method='POST' action='update-plantation.php'>";

                echo "<tr><th>PALM ID</th><td><input type='text' name='palmID' value='" . $row['palmID'] . "' readonly></td></tr>";

                echo "<tr><th>MEASUREMENT</th><td><input type='text' name='size' value='" . $row['size'] . "' readonly></td></tr>";

                echo "<tr><th>LOCATION</th><td><input type='text' name='address' value='" . $row['address'] . "' ></td></tr>";

                echo "<tr><th>OWNER ID</th><td><input type='text' name='ownerID' value='" . $row['ownerID'] . "'></td></tr>";

                

                echo "<tr><td colspan='2'><input type='submit' name='submit' value='UPDATE'></td></tr>";

            echo "</form>";
            }
           echo "</table></form>";
        } 
        else 
        {
            echo "0 results";
        }


    $conn->close();
    ?>
</section>

<?php
include("footer.php");
?>
</body>

</html>
