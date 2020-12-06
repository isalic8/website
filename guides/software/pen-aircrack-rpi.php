<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../style.css"/>
	<link rel="shortcut icon" type="image/x-icon" href="../pix/favicon.ico"/>
	<title>Aircrack RPI</title>
</head>
<body>
	<header>
		<?php include '../navigation1.php';?>
	</header>

	<div class="main">
	<h2>Installing Aircrack in RPI3</h2>
	<h3>Preface</h3>
	<p>
	I reference the <a target="_blank" href="https://www.aircrack-ng.org/doku.php?id=install_aircrack#installing_aircrack-ng_from_source">official aircrack installation guide</a>.
	</p>

	<h3>Dependencies</h3>
	<pre>
$ apt-get -y install libssl-dev libnl-3-dev libnl-genl-3-dev ethtool
	</pre>

	<h3>Installation</h3>
	<pre>
$ wget https://download.aircrack-ng.org/aircrack-ng-1.6.tar.gz
$ tar -zxvf aircrack-ng-1.6.tar.gz
$ cd aircrack-ng-1.6
$ autoreconf -i
$ ./configure --with-experimental
$ make
$ make install
$ ldconfig
	</pre>
	</div>
</body>
</html>
