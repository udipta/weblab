<!DOCTYPE html>
<html>
<head>
	<title>Timer</title>
	<script>
		function startTimer(){
			var d = new Date();
			var h = d.getHours(), m = d.getMinutes(), s = d.getSeconds();
			document.getElementById('txt').innerHTML = h + ':' + m + ':' + s ;
			setTimeout('startTimer()',1000);
		}
	</script>

	<style>
		h1{
			font-size: 70px;
			text-align: center;
		}
	</style>
</head>
<body onload="startTimer()">
	<br>
	<h1>
		Local System :
		<span id="txt"></span>
	</h1>
</body>
</html>

<br><br>

<!DOCTYPE html>
<html>
	<body>
		<h1>
			<?php echo "Server :" .date("H:i:s A");?>
		</h1>
	</body>
</html>