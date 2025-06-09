<?php
include ('connect.php');
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Graphical Dashboard</title>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript">
		google.charts.load('current', {'packages':['bar']});
		google.charts.setOnLoadCallback(drawChart);

		function drawChart() {
			var data = google.visualization.arrayToDataTable([
				['Month', 'Sale'],
				<?php
				$query = "SELECT w.month as month, SUM(w.weightofpalm) as total_weight, SUM(v.total) as total_sale FROM owner o INNER JOIN palmplantation p ON o.ownerID = p.ownerID INNER JOIN weight w ON w.palmID = p.palmID  INNER JOIN voucher v ON v.no = w.no GROUP BY w.month";
				$result = mysqli_query($conn, $query);
				while ($data = mysqli_fetch_array($result)) {
					$month = $data['month'];
					$totalSale = $data['total_sale'];
				?>
					['<?php echo $month; ?>', <?php echo $totalSale; ?>],
				<?php
				}
				?>
			]);
			
			var options = {
				chart: {
					title: 'Monthly FFB',
					subtitle: 'Total Sale by Month',
					vAxis: {title: 'Sale'},
            		hAxis: {title: 'Month'},
                    seriesType: 'bars',
                    series: {5: {type: 'line'}}
				},
				bars: 'vertical'
			};

			var chart = new google.charts.Bar(document.getElementById('barchart_material'));

			chart.draw(data, google.charts.Bar.convertOptions(options));
		}
	</script>
</head>
<body>
	<div id="barchart_material" style="width: 1000px; height: 1000px;"></div>
</body>
</html>
