<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../style.css"/>
	<link rel="shortcut icon" type="image/x-icon" href="../pix/favicon.ico"/>
	<title>Nginx with PHP</title>
</head>
<body>
	<header>
		<?php include '../navigation1.php';?>
	</header>

	<div class="main">
	<h2>Nginx with PHP</h2>
	<h3>Dependencies</h3>
	<pre>
$ apt install nginx php php-fpm
	</pre>

	<h3>Setting up php and nginx services</h3>
	<p>The cgi.fix_pathinfo variable tells PHP to attempt to execute the closest file it can find if the requested PHP file cannot be found. Let's set this variable to false.</p>
	<pre>
$ vim /etc/php/7.3/fpm/php.ini
<span style="color: red;"># Edit this variable</span>
<span style="color: red;">cgi.fix_pathinfo=0</span>


$ systemctl start nginx php7.3-fpm
$ systemctl enable nginx php7.3-fpm
	</pre>

	<h3>Adding PHP to nginx</h3>
	<pre>
server {
    listen 80 default_server;
    listen [::]:80 default_server;

    root /var/www/html;
    index <span style="color: red;">index.php</span> index.html index.htm index.nginx-debian.html;

    server_name server_domain_or_IP;

    location / {
        try_files $uri $uri/ =404;
    }

    <span style="color: red;">location ~ \.php$ {</span>
    <span style="color: red;">    include snippets/fastcgi-php.conf;</span>
    <span style="color: red;">    fastcgi_pass unix:/run/php/php7.3-fpm.sock;</span>
    <span style="color: red;">}</span>

    <span style="color: red;">location ~ /\.ht {</span>
        <span style="color: red;">deny all;</span>
    <span style="color: red;">}</span>
}
	</pre>
	</div>
</body>
</html>
