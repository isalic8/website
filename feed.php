<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="files/pix/icon.gif"/>
	<link rel="stylesheet" href="style.css"/>
	<title>Guides</title>
</head>
<body>
	<div class="main">
		<div class="header">
			<p>
			Unixfandom.com
			<img src="files/pix/penguin.gif" alt="penguin_gif">
			</p>
		</div>

		<nav>
			<?php include 'navigation.php';?>
		</nav>

	<h1>Feed <img src="files/pix/bart.gif" id="bart_gif" alt="bart_gif"></h1>
	<div class="grid-container">
		<div class="grid-item-border">
		<h3>Server</h3>
			<li>Linux of things</li>
			<li><a href="linux-secure-users.php">Securing remote user accounts</a></li>
			<li>Searx</li>
			<li><a href="searx-install.php">Installation (docker+nginx)</a></li>
			<li><a href="searx-engine.php">Setting default search engine</a></li>
			<li>Nginx</li>
			<li><a href="nginx-letsencrypt.php">SSL with letsencrypt</a></li>
			<li><a href="nginx-php.php">Installing with PHP support</a></li>
			<li><a href="nginx-tor.php">Setting up a hidden tor service</a></li>
			<li><a href="nginx-tor-urlv3.php">Generating a vanity onionv3 domain</a></li>
			<li>Git</li>
			<li><a href="git-server.php">Creating personal git server</a></li>
			<li>OpenSMTPD</li>
			<li><a href="opensmtpd-debian.php">Compiling OpenSMTPD on Debian 10</a></li>
		</div>
		<div class="grid-item-border">
		<h3>Software</h3>
			<li>Wine</li>
			<li><a href="wine-dll.php">Installing .dll files</a></li>
			<li><a href="wine-office.php">Microsoft Office 2010</a></li>
			<li><a href="wine-haloce.php">Halo Combat Evolved</a></li>
			<li>Qemu</li>
			<li><a href="qemu-basics.php">Basic tutorial</a></li>
			<li><a href="qemu-smb.php">Sharing files between host and guest</a></li>
			<li>Pentest</li>
			<li><a href="pen-aircrack.php">Basic deauthentication with Aircrack</a></li>
			<li>Untitled</li>
			<li><a href="radio.php">Listening to your radio stations in the terminal</a></li>
		</div>
		<div class="grid-item-border">
		<h3>Hardware</h3>
			<li>Pinebook Pro</li>
			<li><a href="pbpspi.php">Booting from NVME (spi flash method)</a><li>
			<li><a href="pbpnvmeroot.php">Using NVME as root partition</a><li>
			<li><a href="pbpnetbsd.php">Installing Netbsd</a><li>
			<li><a href="pbpzram.php">Configuring ZRAM</a><li>
			<li><a href="pbpkeyboard.php">Keyboard updater</a><li>
			<li>Libreboot</li>
			<li><a href="libreboot-general.php">General things to know.</a></li>
			<li>Digispark</li>
			<li><a href="digispark.php">Digispark installation</a></li>
		</div>
		<div class="grid-item-border">
		<h3>Misc</h3>
			<li><a href="misc-netcat.php">Transfering files with Netcat</a></li>
			<li><a href="misc-ssh.php">Generating ssh keys</a></li>
			<li><a href="misc-bluetooth.php">Bluetoothctl</a></li>
			<li><a href="misc-grub.php">Booting from grub</a></li>
			<li><a href="misc-gpg-graphical.php">GTK prompt for GPG</a></li>
			<li><a href="misc-openvpn-lan">Openvpn: Allow hosts to see other vlan hosts</a></li>
			<li><a href="misc-raspberrypi-nonet.php">RPI fix: Internet randomly not working with static ip</a></li>
		</div>
	</div>

	<div class="footer">
			<?php include 'footer.php';?>
	</div>
</body>
</html>
