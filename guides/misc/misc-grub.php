<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../style.css"/>
	<link rel="shortcut icon" type="image/x-icon" href="../pix/favicon.ico"/>
	<title>Grub</title>
</head>
<body>
	<header>
		<?php include '../navigation1.php';?>
	</header>

	<div class="main">
	<h2>Booting from grub</h2>
	<p>We've all been there...</p>
	<pre>
	grub> ls
		(hd0) (hd0,msdos2) (hd0,msdos1)
	grub> set root=(hd0,msdos2)
	grub> linux /boot/vmlinuz-3.13.0-29-generic root=/dev/sda1
	grub> initrd /boot/initrd.img-3.13.0-29-generic
	grub> boot
	</pre>
	</div>
</body>
</html>
