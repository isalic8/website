<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../style.css"/>
	<link rel="shortcut icon" type="image/x-icon" href="../pix/favicon.ico"/>
	<title>Guides</title>
</head>
<body>
	<header>
		<?php include 'navigation.php';?>
	</header>

	<div class="main">
	<h2>Guides</h2>
	<h2>Hardware</h2>
		<h3>PBP</h3>
		<li>Booting</li>
		<li><a href="pbpspi.php">Booting from NVME (spi flash method)</a><li>
		<li><a href="pbpnvmeroot.php">Using NVME as root partition</a><li>
		<br>
		<li>Software</li>	
		<li><a href="pbpnetbsd.php">Installing Netbsd</a><li>
		<li><a href="pbpzram.php">Configuring ZRAM</a><li>
		<li><a href="pbpkeyboard.php">Keyboard updater</a><li>
		<h3>Libreboot</h3>
		<li><a href="libreboot-general.php">General things to know.</a></li>
		<h3>Digispark</h3>
		<li><a href="digispark.php">Digispark installation</a></li>
	<h2>Software</h2>
		<h3>Wine</h3>
		<li><a href="wine-dll.php">Installing .dll files</a></li>
		<li><a href="wine-office.php">Microsoft Office 2010</a></li>
		<li><a href="wine-haloce.php">Halo Combat Evolved</a></li>
		<h3>Qemu</h3>
		<li><a href="qemu-basics.php">Basic tutorial</a></li>
		<li><a href="qemu-smb.php">Sharing files between host and guest</a></li>
		<h3>Pentest</h3>
		<li><a href="pen-aircrack.php">Basic deauthentication with Aircrack</a></li>
		<h3>Untitled</h3>
		<li><a href="radio.php">Listening to your radio stations in the terminal</a></li>
	<h2>Server</h2>
		<h3>Linux of things</h3>
		<li><a href="linux-secure-users.php">Securing remote user accounts</a></li>
		<br>
		<h3>Searx</h3>
		<li><a href="searx-install.php">Installation (docker+nginx)</a></li>
		<li><a href="searx-engine.php">Setting default search engine</a></li>
		<br>
		<h3>Nginx</h3>
		<li><a href="nginx-letsencrypt.php">SSL with letsencrypt</a></li>
		<li><a href="nginx-php.php">Installing with PHP support</a></li>
		<li><a href="nginx-tor.php">Setting up a hidden tor service</a></li>
		<li><a href="nginx-tor-urlv3.php">Generating a vanity onionv3 domain</a></li>
		<br>
		<h3>Git</h3>
		<li><a href="git-server.php">Creating personal git server</a></li>
		<br>
		<h3>OpenSMTPD</h3>
		<li><a href="opensmtpd-debian.php">Compiling OpenSMTPD on Debian 10</a></li>
	<h2>Misc</h2>
		<li><a href="misc-netcat.php">Transfering files with Netcat</a></li>
		<li><a href="misc-ssh.php">Generating ssh keys</a></li>
		<li><a href="misc-bluetooth.php">Bluetoothctl</a></li>
		<li><a href="misc-grub.php">Booting from grub</a></li>
		<li><a href="misc-gpg-graphical.php">GTK prompt for GPG</a></li>
		<li><a href="misc-openvpn-lan">Openvpn: Allow hosts to see other vlan hosts</a></li>
		<li><a href="misc-raspberrypi-nonet.php">RPI fix: Internet randomly not working with static ip</a></li>
</body>
</html>
