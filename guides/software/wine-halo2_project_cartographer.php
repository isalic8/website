<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../style.css"/>
	<link rel="shortcut icon" type="image/x-icon" href="../pix/favicon.ico"/>
	<title>Halo Project Cartographer</title>
</head>
<body>
	<header>
		<?php include '../navigation1.php';?>
	</header>

	<div class="main">
	<h2>INCOMPLETE Halo Project Cartographer in Wine</h2>
	<h3>Preface</h3>
	<p>
	I reference <a target="_blank" href="https://www.youtube.com/watch?v=xsYWt4viLhM">this video</a>.
	<br>
	You can download the Halo files from <a href="https://www.cartographer.online/">the official site</a> or <a href="../files">my site</a>
	<br>
	You want to select
	<a target="_blank" href="http://www.h2maps.net/Cartographer/Installer/h2pc_installer_1.8.1.zip">Full Game Installer + Mod </a> ||
	<a target="_blank" href="http://www.h2maps.net/Cartographer/Installer/h2pc_installer_1.8.1.zip.torrent">Torrent Link</a>
	</p>

	<h3>Installing DLL files</h3>
	<pre>
$ WINEARCH=win32 WINEPREFIX=~/.wine winetricks mf wmp10 d3d9
	</pre>
	
	<h3>Installing and running</h3>
	<pre>
# Go through the installation normally
$ WINEARCH=win32 wine halo2setup.exe

# Run Halo 2
$ WINEARCH=win32 wine ~/.wine/[...]/halo2.exe
	</pre>
	</div>
</body>
</html>
