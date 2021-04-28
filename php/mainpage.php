<?php 
session_start();
?>

<html>
<head>
	<title>Main Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/style.css">
</head>

<body>
	<div class="header"> <!--Header-->
		<h1>Interocean Motor</h1>
	</div>
	<center>
	<h1>Welcome <?php echo $_SESSION['username']; ?></h1>
    </center>
	<div class="footer"> <!--Footer-->
		<h3>Copyright@Interocean Motor 2021</h3>
	</div>
</body>
</html>