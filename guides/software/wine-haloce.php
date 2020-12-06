<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../style.css"/>
	<link rel="shortcut icon" type="image/x-icon" href="../pix/favicon.ico"/>
	<title>Halo</title>
</head>
<body>
	<header>
		<?php include '../navigation1.php';?>
	</header>

	<div class="main">
	<h2>Halo CE installation</h2>

	<h3>Prerequisites</h3>
	<p>A <strike><a target="_blank" href="https://thepiratebay.org/description.php?id=6876717">legitimate</a></strike></a> copy of Halo Combat evolved.</p>

	<h3>DLLs</h3>
	<p>
	Manually download <a target="_blank" href="http://www.dlldownloader.com/mfc42-dll/">mfc42.dll</a> and place it in <span class="emph">~/.wine/drive_c/[...]/system32/</span>
	<br>
	Installing it via winetricks didn't work for me. Manually adding the file worked just fine.	
	</p>

	<h3>Run Halo</h3>
	<pre>
WINEARCH=win32 halosetup.exe
WINEARCH=win32 ~/.wine/[...]/halo.exe
	</pre>

	<h3>Troubleshooting</h3>

	<h4>"Muh halo has nuh audio"</h4>
	<p>Install "lib32-alsa-plugins lib32-libpulse lib32-openal" if you haven't already. I had this problem with pulseaudio.</p>

	<h4>"It don't werk"</h4>
	<p>
	Explicitly set the <span class="emph">WINEARCH</span> variable before running it. Hopefully this fixes the problem
	</p>
	</div>
</body>
</html>
