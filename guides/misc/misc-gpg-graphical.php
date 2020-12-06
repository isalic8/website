<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../style.css"/>
	<link rel="shortcut icon" type="image/x-icon" href="../pix/favicon.ico"/>
	<title>GPG GTK</title>
</head>
<body>
	<header>
		<?php include '../navigation1.php';?>
	</header>

	<div class="main">
	<h2>GPG with GTK prompt</h2>
	<h3>Preface</h3>
	<p>You may have experienced a problem where you want a graphical prompt to appear when decrypting files, but instead a tty prompt appears. Your gpg agent uses "pinentry" to display this prompt. All we need to do is tell gpg agent to use pinentry-gtk instead of pinentry-tty</p>

	<pre>
# Create the file if it doesn't exist
$ vim ~/.gnupg/gpg-agent.conf

pinentry-program /usr/bin/pinentry-gtk-2 # Or use pinentry-gtk

# Restart the GPG agent
$ gpg-connect-agent reloadagent /bye
	</pre>
	<p>A graphical password prompt should now appear.</p>

	</div>
</body>
</html>
