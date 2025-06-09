<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DASHBOARD</title>
	<link rel="stylesheet" type="text/css" href="css/dashboard.css">


</head>
<body class= "ti">
<?php 

include("head-manager.php");
include("connect.php");

?>

<section>
	<form action="" method="GET">
		<input type="text" name="query" placeholder="Owner's name">
		<input type="submit" name="submit" value="SEARCH">
	</form>

</section>
<article>
	<?php 
		if(isset($_GET['submit']))//If user click on the search button
		{
			if($_GET['query']!= NULL) //if text input has value
			{
				$query = $_GET['query'];
				$sql= "SELECT * FROM owner o INNER JOIN palmplantation p ON o.ownerID = p.ownerID INNER JOIN weight w ON w.palmID = p.palmID WHERE o.name LIKE '%".$query."%'";
				$result = mysqli_query($conn, $sql);
				$i = 1;
				if ($result->num_rows > 0)
				{
					echo "<table>"; 
					echo "<tr><th>NO</th><th>OWNER ID</th><th>OWNER NAME</th><th>PALM ID</th><th>SIZE</th><th>MONTH</th><th>WEIGHT</th></tr>";

					while($row = $result->fetch_assoc())
					{
						echo "<tr>";
                        echo "<td>".$i++."</td>";
                        echo "<td>".$row['ownerID']."</td>";
                        echo "<td>".$row['name']."</td>";
                        echo "<td>".$row['palmID']."</td>";
                        echo "<td>".$row['size']."</td>";
                        echo "<td>".$row['month']."</td>";
                        echo "<td>".$row['weightofpalm']."</td>";

					}
					echo "</table><br><br>";

				}
				else
				{
					echo "<br>0 result<br><br>";
				}
			}
		}
		else 
		{
			$sql= "SELECT * FROM owner o INNER JOIN palmplantation p ON o.ownerID = p.ownerID INNER JOIN weight w ON w.palmID = p.palmID";
				$result = $conn->query($sql);

				$i = 1;
				if ($result->num_rows > 0)
				{
					echo "<table>"; 
					echo "<tr><th>NO</th><th>OWNER ID</th><th>OWNER NAME</th><th>PALM ID</th><th>SIZE</th><th>MONTH</th><th>WEIGHT</th></tr>";

					while($row = $result->fetch_assoc())
					{
						echo "<tr>";
                        echo "<td>".$i++."</td>";
                        echo "<td>".$row['ownerID']."</td>";
                        echo "<td>".$row['name']."</td>";
                        echo "<td>".$row['palmID']."</td>";
                        echo "<td>".$row['size']."</td>";
                        echo "<td>".$row['month']."</td>";
                        echo "<td>".$row['weightofpalm']."</td>";


					}
					echo "</table><br><br>";

				}
				else
				{
					echo "<br>0 result<br><br>";
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