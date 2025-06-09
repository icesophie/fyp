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
  <title>Weight</title>
  <link rel="stylesheet" type="text/css" href="css/display-voucher.css">
</head>
<body class="ti">
<?php
include("head-clerk.php");
include("connect.php"); 
?>

<section>
  <form action="" method="GET">
    <input type="text" name="query" placeholder="Search Lorry Plate Number ">
    <input type="submit" name="submit" value="SEARCH">
  </form>

<br><p><a href="weight.php">
      <input type="submit" value="NEW WEIGHT" ></a></p>
</section>
<article>
  <?php 
  
   if(isset($_GET['submit']))//If user click on the search button
    {
      if($_GET['query']!= NULL) //if text input has value
      {
        $query = $_GET['query'];
        $sql= "SELECT weight.*, palmplantation.address, owner.name
                FROM weight
                JOIN palmplantation ON weight.palmID = palmplantation.palmID
                JOIN owner ON weight.ownerID = owner.ownerID WHERE lorryplatenum LIKE '%".$query."%'";
        $result = mysqli_query($conn, $sql);
        $i = 1;
        if ($result->num_rows > 0)
        {
          echo "<table>"; 
          echo "<tr>
                  <th>NO</th>
                  <th>LORRY</th>
                  <th>DATE</th>
                  <th>MONTH</th>
                  <th>TIME</th>
                  <th>ADRESS</th>
                  <th>OWNER NAME</th>
                  <th>WEIGHT OF LORRY AND PALM</th>
                  <th>WEIGHT OF PALM</th>
            <th colspan='2'> UPDATE </th>
            </tr>";

          while($row = $result->fetch_assoc())
          {
            echo "<tr>";
                        echo "<td>".$row['no']."</td>";
                        echo "<td>".$row['lorryplatenum']."</td>";
                        echo "<td>".$row['date']."</td>";
                        echo "<td>".$row['month']."</td>";
                        echo "<td>".$row['time']."</td>";
                        echo "<td>".$row['address']."</td>";
                        echo "<td>".$row['name']."</td>";
                        echo "<td>".$row['weightoflorryandpalm']."</td>";
                        echo "<td>".$row['weightofpalm']."</td>";
                        echo "<td><a href='delete-weight.php?id= ".$row['no']."'>Delete</a></td>";

          }
          echo "</table><br><br>";

        }
      }
    }
        else
        {
          $sql= "SELECT weight.*, palmplantation.address, owner.name
                FROM weight
                JOIN palmplantation ON weight.palmID = palmplantation.palmID
                JOIN owner ON weight.ownerID = owner.ownerID";
        $result = $conn->query($sql);

        $i = 1;
        if ($result->num_rows > 0)
        {
          echo "<table>"; 
          echo "<tr>
                 <th>NO</th>
             <th>LORRY</th>
             <th>DATE</th>
             <th>MONTH</th>
             <th>TIME</th>
             <th>ADDRESS</th>
             <th>OWNER NAME</th>
             <th>WEIGHT OF LORRY AND PALM</th>
             <th>WEIGHT OF PALM</th>
            <th colspan='2'> UPDATE </th>
            </tr>";

          while($row = $result->fetch_assoc())
          {
            echo "<tr>";
                        echo "<td>".$row['no']."</td>";
                        echo "<td>".$row['lorryplatenum']."</td>";
                        echo "<td>".$row['date']."</td>";
                        echo "<td>".$row['month']."</td>";
                        echo "<td>".$row['time']."</td>";
                        echo "<td>".$row['address']."</td>";
                        echo "<td>".$row['name']."</td>";
                        echo "<td>".$row['weightoflorryandpalm']."</td>";
                        echo "<td>".$row['weightofpalm']."</td>";
                       
                        echo "<td><a href='delete-weight.php?id= ".$row['no']."'>Delete</a></td>";

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