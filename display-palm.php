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
  <title>Plantations</title>
  <link rel="stylesheet" type="text/css" href="css/display-voucher.css">
</head>
<body class="ti">
<?php
include("head-clerk.php");
include("connect.php"); 
?>

<section>
  <form action="" method="GET">
    <input type="text" name="query" placeholder="Search Address">
    <input type="submit" name="submit" value="SEARCH">
  </form>

<br><p><a href="palmdetailsinsertion.php">
      <input type="submit" value="NEW PALM PLANTATION" ></a></p>
</section>
<article>
  <?php 
  
   if(isset($_GET['submit']))//If user click on the search button
    {
      if($_GET['query']!= NULL) //if text input has value
      {
        $query = $_GET['query'];
        $sql= "SELECT * FROM  palmplantation WHERE address LIKE '%".$query."%'";
        $result = mysqli_query($conn, $sql);
        $i = 1;
        if ($result->num_rows > 0)
        {
          echo "<table>"; 
          echo "<tr>
            <th>PALM ID</th>
            <th>MEASUREMENT</th>
            <th>LOCATION</th>
            <th>OWNER ID</th>
            <th colspan='2'> UPDATE </th>
            </tr>";

          while($row = $result->fetch_assoc())
          {
            echo "<tr>";
                        echo "<td>".$row['palmID']."</td>";
                        echo "<td>".$row['size']."</td>";
                        echo "<td>".$row['address']."</td>";
                        echo "<td>".$row['ownerID']."</td>";
                        echo "<td><a href='edit-palm.php?id= ".$row['palmID']."'>Edit</a></td>";
                        echo "<td><a href='delete-plantation.php?id= ".$row['palmID']."'>Delete</a></td>";

          }
          echo "</table><br><br>";

        }
      }
    }
        else
        {
          $sql= "SELECT * FROM palmplantation";
        $result = $conn->query($sql);

        $i = 1;
        if ($result->num_rows > 0)
        {
          echo "<table>"; 
          echo "<tr>
                <th>PALM ID</th>
                <th>MEASUREMENT</th>
                <th>LOCATION</th>
                <th>OWNER ID</th>
            <th colspan='2'> UPDATE </th>
            </tr>";

          while($row = $result->fetch_assoc())
          {
            echo "<tr>";
                        echo "<td>".$row['palmID']."</td>";
                        echo "<td>".$row['size']."</td>";
                        echo "<td>".$row['address']."</td>";
                        echo "<td>".$row['ownerID']."</td>";
                        echo "<td><a href='edit-palm.php?id= ".$row['palmID']."'>Edit</a></td>";
                        echo "<td><a href='delete-plantation.php?id= ".$row['palmID']."'>Delete</a></td>";

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