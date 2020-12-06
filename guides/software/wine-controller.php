<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../style.css"/>
	<link rel="shortcut icon" type="image/x-icon" href="../pix/favicon.ico"/>
	<title>Wine Controller</title>
</head>
<body>
	<header>
		<?php include '../navigation1.php';?>
	</header>

	<div class="main">
	<h2>Using controller in wine</h2>
	<h3>Preface</h3>
	<p>
	Here's how to hookup an xbox360 controller in wine.
	
	</p>

	<pre>
echo "blacklist xpad" | sudo tee -a /etc/modprobe.d/blacklist.conf
sudo rmmod xpad  # unload module if already loaded

yay -S joystick xboxdrv
sudo xboxdrv --silent 
	</pre>

	</div>
</body>
</html>
