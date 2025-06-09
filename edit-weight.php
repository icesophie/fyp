<?php
session_start();
include("head-clerk.php");
include("connect.php");

?>

<html>
<head>
    <title>Edit Weight</title>
</head>
<body class="updateweight">
<section>
    <?php

        $id = $_GET['id']; // Assuming you have validated and sanitized the input

        $stmt = $conn->prepare("SELECT * FROM weight WHERE no = ?");
        $stmt->bind_param("s", $id);
        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows > 0) 
        {
            // Output data of each row
            while ($row = $result->fetch_assoc()) 
            {
                echo "<center><h3>WEIGHT DETAILS</h3></center>";
                echo "<table border='1' width='40%' align='center'>";
                echo "<form method='POST' action='update-weight.php'>";
                echo "<tr><th>NO</th><td><input type='text' name='no' value='" . $row['no'] . "' readonly></td></tr>";
                echo "<tr><th>LORRY</th><td><input type='text' name='lorryplatenum' value='" . $row['lorryplatenum'] . "'></td></tr>";
                echo "<tr><th>DATE</th><td><input type='text' name='date' value='" . $row['date'] . "'></td></tr>";
                echo "<tr><th>MONTH</th><td><input type='text' name='month' value='" . $row['month'] . "'></td></tr>";
                echo "<tr><th>TIME</th><td><input type='text' name='time' value='" . $row['time'] . "'></td></tr>";
                echo "<tr><th>PALM ID</th><td><input type='text' name='palmID' value='" . $row['palmID'] . "'></td></tr>";
                echo "<tr><th>OWNER ID</th><td><input type='text' name='ownerID' value='" . $row['ownerID'] . "'></td></tr>";
                echo "<tr><th>WEIGHT OF LORRY AND PALM</th><td><input type='text' name='weightoflorryandpalm' value='" . $row['weightoflorryandpalm'] . "'></td></tr>";
                echo "<tr><th>WEIGHT OF PALM</th><td><input type='text' name='weightofpalm' value='" . $row['weightofpalm'] . "'></td></tr>";
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
