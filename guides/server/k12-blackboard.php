<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../style.css"/>
	<link rel="shortcut icon" type="image/x-icon" href="../pix/favicon.ico"/>
	<title>K12 Linux</title>
</head>
<body>
	<div class="main">
		<div class="header">
			<p>
			<a href="../../index.php">
			Unixfandom.com
			<img src="../../files/pix/penguin.gif" alt="penguin_gif">
			</a>
			</p>
		</div>

		<nav>
			<?php include '../navigation.php';?>
		</nav>
	<h1>Playing K12 jnlp files (blackboard)</h1>
	<h3>Preface</h3>
	<p>
	This is only relevant if you attend K12 highschool online.
	K12 uses the sucky blackboard system for live class connects.
	Blackboard uses Java version 1.6 for it's class connects. All we'll need to do is download the correct version of java and run our jnlp file using javaws.
	</p>

	<h3>Installing the right java version</h3>
	<p>
	Download Openjdk8(LTS) from
	<a href="https://adoptopenjdk.net/?variant=openjdk8&jvmVariant=hotspot" target="_blank">adoptopenjdk.net</a> or from an archived link
	<a href="https://web.archive.org/web/20200420070108/https://github-production-release-asset-2e65be.s3.amazonaws.com/140418865/c112f300-80b2-11ea-906e-c81beb978e10?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAIWNJYAX4CSVEH53A%2F20200420%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20200420T070108Z&X-Amz-Expires=300&X-Amz-Signature=b66e81f8991fab9d702306071214cafd69c189fc28e9c8aa86e48883bee2d87c&X-Amz-SignedHeaders=host&actor_id=0&repo_id=140418865&response-content-disposition=attachment%3B%20filename%3DOpenJDK8U-jdk_x64_linux_hotspot_8u252b09.tar.gz&response-content-type=application%2Foctet-stream" target="_blank">using the WayBackMachine</a>
	<p>
	<pre>
# Extracting the openjdk
$ tar -xzvf OpenJDK8*.tar.gz

# I like to place my programs from the web in the /opt directory
	</pre>

	<h3>Running our JNLP</h3>
	<p>
	Now that we have the correct version of java downloaded, we need something to actually open our .jnlp file.
	We'll use icedtea for this. The name of the package will vary depending on your system, so use your package manager to search for it.
	</p>

	<pre>
# On Debian
$ apt install icedtea-netx

# I think it's "icedtea-webx" on Arch/Manajaro.
# I've also seen it named "icedtea-web"
	</pre>
	<p>
	After that, the next thing we have to do is run our class connect file.
	We'll set the JAVA_HOME variable to the directory of the extracted openjdk enviroment.
	"Javaws" (icedtea) looks at this variable to decide what java version it'll use to execute the file 
	</p>

	<pre>
$ export JAVA_HOME=/path/to/jdk8/
$ javaws class_connect.jnlp

# PROFIT!!!!!
	</pre>

	<img src="../pix/k12.png">

	<h3>Troubleshooting</h3>
	<p>If you're running a window manager you might see that the class connect runs fine, but the window is a blank screen. The simplest fix I found was to use a DE such as lxde, mate, kde, etc. I'm using mate in the photo above.</p>
	</div>
	<div class="footer">
			<?php include '../footer.php';?>
	</div>
</body>
</html>
