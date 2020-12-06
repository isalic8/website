<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../style.css"/>
	<link rel="shortcut icon" type="image/x-icon" href="../pix/favicon.ico"/>
	<title>SSH Keys</title>
</head>
<body>
	<header>
		<?php include '../navigation1.php';?>
	</header>

	<div class="main">
	<h2>Generating SSH Keys</h2>
	<p>....I just can't seem to remember....</p>
	<pre>
ssh-keygen -t rsa  [ -b &lt;bits&gt; ]
ssh-copy-id -i &lt;/path/to/idrsa.pub&gt; example@10.0.0.1
	</pre>

	</div>
	</p>

</body>
</html>
