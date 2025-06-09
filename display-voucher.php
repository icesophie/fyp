<?php 
session_start();
$position =  $_SESSION['position'] ;
$staffID =  $_SESSION['staffID'];
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Voucher</title>
  <link rel="stylesheet" type="text/css" href="css/display-voucher.css">
</head>
<body class="ti">
<?php
include("head-clerk.php");
include("connect.php"); 
?>

<section>
  <form action="" method="GET">
    <input type="text" name="query" placeholder="Search Palm ID">
    <input type="submit" name="submit" value="SEARCH">
  </form>

<br><p><a href="voucher-create-calculate.php">
      <input type="submit" value="NEW VOUCHER" ></a></p>
</section>
<article>
  <?php 
  
   if(isset($_GET['submit']))//If user click on the search button
    {
      if($_GET['query']!= NULL) //if text input has value
      {
        $query = $_GET['query'];
        $sql= "SELECT * FROM voucher  WHERE palmID LIKE '%".$query."%'";
        $result = mysqli_query($conn, $sql);
        $i = 1;
        if ($result->num_rows > 0)
        {
          echo "<table>"; 
          echo "<tr>
            <th>VOUCHER ID</th>
            <th>WEIGHT OF PALM</th>
            <th>OER</th>
            <th>OER PRICE </th>
            <th>PALM ID</th>
            <th>STAFF ID</th>
            <th>NO</th>
            <th>TOTAL</th>
            <th colspan='2'> UPDATE </th>
            </tr>";

          while($row = $result->fetch_assoc())
          {
            echo "<tr>";
                        echo "<td>".$i++."</td>";
                        echo "<td>".$row['weightofpalm']."</td>";
                        echo "<td>".$row['oer']."</td>";
                        echo "<td>".$row['oerprice']."</td>";
                        echo "<td>".$row['palmID']."</td>";
                        echo "<td>".$row['staffID']."</td>";
                        echo "<td>".$row['no']."</td>";
                        echo "<td>".$row['total']."</td>";
                        echo "<td><a href='print-voucher.php?id= ".$row['voucherID']."'>Print</a></td>";
                        echo "<td><a href='delete-voucher.php?id= ".$row['voucherID']."'>Delete</a></td>";

          }
          echo "</table><br><br>";

        }
      }
    }
        else
        {
          
         $sql= "SELECT * FROM voucher  WHERE palmID";
        $result = mysqli_query($conn, $sql);
        $i = 1;
        if ($result->num_rows > 0)
        {
          echo "<table>"; 
          echo "<tr>
            <th>VOUCHER ID</th>
            <th>WEIGHT OF PALM</th>
            <th>OER</th>
            <th>OER PRICE </th>
            <th>PALM ID</th>
            <th>STAFF ID</th>
            <th>NO</th>
            <th>TOTAL</th>
            <th colspan='2'> UPDATE </th>
            </tr>";

          while($row = $result->fetch_assoc())
          {
            echo "<tr>";
                        echo "<td>".$i++."</td>";
                        echo "<td>".$row['weightofpalm']."</td>";
                        echo "<td>".$row['oer']."</td>";
                        echo "<td>".$row['oerprice']."</td>";
                        echo "<td>".$row['palmID']."</td>";
                        echo "<td>".$row['staffID']."</td>";
                        echo "<td>".$row['no']."</td>";
                        echo "<td>".$row['total']."</td>";
                        echo "<td><a href='print-voucher.php?id= ".$row['voucherID']."'>Print</a></td>";
                        echo "<td><a href='delete-voucher.php?id= ".$row['voucherID']."'>Delete</a></td>";

          }
          echo "</table><br><br>";

        }
      }
    

  ?>
</article>
<?php
$conn->close();
include("footer.php");

?>
</body>
</html>