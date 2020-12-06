<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../style.css"/>
	<link rel="shortcut icon" type="image/x-icon" href="../pix/favicon.ico"/>
	<title>Metasploit RPI</title>
</head>
<body>
	<header>
		<?php include '../navigation1.php';?>
	</header>

	<div class="main">
	<h2>Installing Metasploit on RPI3</h2>
	<h3>Preface</h3>
	<p>
	This a copy paste of a <a href="https://web.archive.org/web/20180617162418/https://github.com/MistSpark/Metasploit_ON_RaspberryPi" target="_blank">Github tutorial</a> for my own personal use.
	I'm installing metasploit on Raspbian GNU/Linux 10 (buster).
	</p>

	<h3>Dependencies</h3>
	<pre>
$ apt -y install build-essential zlib1g zlib1g-dev \
	libxml2 libxml2-dev libxslt-dev locate \
	libreadline6-dev libcurl4-openssl-dev git-core \
	libssl-dev libyaml-dev openssl autoconf libtool \
	ncurses-dev bison curl wget postgresql postgresql-contrib \
	libpq-dev libapr1 libaprutil1 libsvn1 libpcap-dev \
	ruby-dev

$ gem install wirble sqlite3 bundler nokogiri bundle
	</pre>

	<h3>Installation</h3>
	<pre>
$ cd /opt
$ git clone https://github.com/rapid7/metasploit-framework.git metasploit
$ cd metasploit

$ bundle install

# Add to $PATH
$ ./msfconsole
	</pre>
	</div>
</body>
</html>
