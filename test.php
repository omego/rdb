<? 
include 'header.php';
 ?>

<!doctype html>
<html>
	<head>
		<title>Radar Chart</title>
		<script src="/rdb/chart/Chart.js"></script>
		<meta name = "viewport" content = "initial-scale = 1, user-scalable = no">
		<style>
			canvas{
			}
		</style>

	</head>
	<body>
		
		<script>
			$(document).ready(function() {
				$('.menu').dropit();
			});
		</script>
		<ul class="menu">
			<li>
				<a href="#"><span class="fui-gear"></span></a>
				<ul>
					<li><a href="#">Some Action 1</a></li>
					<li><a href="#">Some Action 2</a></li>
					<li><a href="#">Some Action 3</a></li>
					<li><a href="#">Some Action 4</a></li>
				</ul>
			</li>
		</ul>
		
		<canvas id="canvas" height="450" width="450"></canvas>


	<script>

		var pieData = [
				{
					value: <? echo $php_var; ?>,
					color:"#F38630"
				},
				{
					value : <? echo $php_sd; ?>,
					color : "#E0E4CC"
				}

			];

	var myPie = new Chart(document.getElementById("canvas").getContext("2d")).Pie(pieData);

	</script>
	</body>
</html>