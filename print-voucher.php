<?php
session_start();

include("connect.php");

?>

<html>
<head>
    <title>VOUCHER</title>
</head>
<body class="updatepalm">
<section>
    <?php

        $id = $_GET['id']; // Assuming you have validated and sanitized the input

        $stmt = $conn->prepare("SELECT * FROM voucher WHERE voucherID = ?");
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
                echo "<form method='POST' action='connect-print.php'>";

                 echo "<tr><th>STAFF ID</th><td><input type='text' name='ownerID' value='" . $row['staffID'] . "' readonly></td></tr>";

                echo "<tr><th>VOUCHER ID</th><td><input type='text' name='ownerID' value='" . $row['voucherID'] . "' readonly></td></tr>";

                echo "<tr><th>WEIGHT</th><td><input type='text' name='size' value='" . $row['weightofpalm'] . "' readonly></td></tr>";

                echo "<tr><th>OER</th><td><input type='text' name='size' value='" . $row['oer'] . "' readonly></td></tr>";

                echo "<tr><th>NO</th><td><input type='text' name='name' value='" . $row['no'] . "' readonly></td></tr>";

                echo "<tr><th>PALM ID</th><td><input type='text' name='name' value='" . $row['palmID'] . "' readonly></td></tr>";

                echo "<tr><th>TOTAL</th><td><input type='text' name='name' value='" . $row['total'] . "' readonly></td></tr>";


                

                

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
<center><button onclick="triggerPrint()">Print</button></center>

  <script>
    function triggerPrint() {
      window.print();
    }
  </script>


<?php
include("footer.php");
?>
</body>

</html>
