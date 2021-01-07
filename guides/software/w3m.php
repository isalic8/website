<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="../../files/pix/icon.gif"/>
	<link rel="stylesheet" href="../../style.css"/>
	<title>W3M</title>
</head>
<body>
	<div class="main">
	<div class="header">
		<p>
		Unixfandom.com
		<img src="../../files/pix/penguin.gif" alt="penguin_gif">
		</p>
	</div>

	<nav>
		<?php include '../navigation.php';?>
	</nav>

	<h1>Awesomeness with W3M</h1>
	<h3>Preface</h3>
	<p>
	Terminal web browsers are a joke, no doubt about it, but W3M is something different... <br><br>
	Oh, one thing, you should watch some youtube videos on w3m by a content creator named Gotbletu. He's done some cool things with it.
	This page is mainly to give notice to it. THE USER SCRIPTS MAKE IT SICK!!!!
	</p>
	<img src="../pix/w3m.png" alt="w3m.png" class="img-smaller">

	<h3>Features</h3>
	<p>
	W3M can execute <a href="https://en.wikipedia.org/wiki/Common_Gateway_Interface">CGI scripts</a> and display the output of the script to the screen.
	The only reference to using cgi scripts was on <a href="http://w3m.sourceforge.net/MANUAL#LocalCGI">this w3m manual page</a>.
	I don't entirley understand how it works, but I guess printing out http header information to the screen can be used to control w3m.
	I'll show you some cool scripts you could use later in this page. Here are some notable features of w3m:
	</p>

	<li>Fully customizable keybindings</li>
	<li>User scripts (DIY ADDONS BABY!!!)</li>
	<li>Images (install w3m-img)</li>
	<li>Tabbing</li>
	<li>Cookie management, history, useragent, autofill, etc.</li>

	<p>Image previews only work well on a select number of terminals. Xterm and Urxvt work well. Other terminals may either not display them at all or have a lot of flickering</p>

	<h3>Basic configuration</h3>
	<p>Here's a list of important files:</p>
	<li><strong>~/.w3m/config</strong> - Contains browser config options</li>
	<li><strong>~/.w3m/config/keymap</strong> - Keybindings. "keymap KEY NULL" clears the keys original mapping.</li>
	<li><strong>~/.w3m/mailcap</strong> - Dictates which programs open which filetypes</li>

	<p>
	The config file is generated by w3m automatically.
	You can either edit this config directly or inside w3m itself, which I think is the prefered method.
	To edit it in w3m, I think the keybinding is ESCAPE-o.
	One interesting option is the "extbrowser" option. You can specify an external command to run on a webpage url.
	The external browser can be invoked using: &lt;NUM&gt;M
	</p>
	<pre>
# Example options (~/.w3m/config)
# %s is substituted for the url
#
extbrowser sh -c 'printf %s "$0" | xsel -b && notify-send "W3M" "URL COPIED"'
extbrowser2 mpv  %s
extbrowser3 youtube-dl -f "bestvideo[ext=mp4]+bestaudio[ext=m4a]/mp4" %s
extbrowser4 setsid xdg-open %s &
	</pre>

	<p>
	The keymap file is created manually.
	I won't go too much into detail.
	<a href="https://github.com/felipesaa/A-vim-like-firefox-like-configuration-for-w3m/blob/master/keymap">Here's an overly populated example config</a>
	My keymap file is A LOT smaller than this. CARVE AWAY BOY! <br><br>
	Besides basic w3m movement, you could also make cool keybindings like these:
	<p>
	<pre>
# Toggle images
keymap i COMMAND "SET_OPTION display_image=toggle; RELOAD"
# Toggle line number
keymap d COMMAND "SET_OPTION show_lnum=toggle"
# Yank current url
keymap yy       EXTERN     "echo -n %s | xsel -b"
# Yank url under cursor
keymap yf       EXTERN_LINK 'env printf %s "$0" | xsel -b'
	</pre>

	<h3>Cool scripts</h3>
	<p>I use these scripts to make w3m usable</p>
	<li>FZF web search <a href="../pix/w3m-fzfsearch.gif" target="_blank">(example gif)</a></li>
	<li>FZF bookmark search <a href="../pix/w3m-fzfbookmark.gif" target="_blank">(example gif)</a></li>
	<li>Automatically torrent magent links (requires transmission-cli)<a href="../pix/w3m-magnet.gif" target="_blank">(example gif)</a></li>
	<li>Undo close tab<a href="../pix/w3m-undotab.gif" target="_blank">(example gif)</a></li>

	<p>
	You can grab all of these scripts <a href="/opt/website/files/config/w3m/">from my website.</a><br>
	You must place the scripts in cgi-bin-root in /usr/lib/w3m/cgi-bin/ and MUST have 755 permissions.<br>
	The scripts in the cgi-bin directory can be placed in ~/.w3m/cgi-bin/<br>
	I'm pretty sure the reason for placing certain scripts in /usr/lib/w3m/cgi-bin has to do with those scripts sending http header information to W3M<br><br>
	
	You can setup keymaps to execute these scripts like this:
	</p>
	<pre>
# Fuzzy search search engines. Capital=New tab
keymap  ss      COMMAND       "SHELL ~/.w3m/cgi-bin/fzf_search.cgi ; GOTO /usr/lib/w3m/cgi-bin/goto_clipboard.cgi"
keymap  sS      COMMAND       "SHELL ~/.w3m/cgi-bin/fzf_search.cgi ; TAB_GOTO /usr/lib/w3m/cgi-bin/goto_clipboard.cgi"
# Fuzzy search bookmarks. Capital=New tab
keymap  sb      COMMAND       "SHELL ~/.w3m/cgi-bin/fzf_bookmarks.cgi ; GOTO /usr/lib/w3m/cgi-bin/goto_clipboard.cgi"
keymap  sB      COMMAND       "SHELL ~/.w3m/cgi-bin/fzf_bookmarks.cgi ; TAB_GOTO /usr/lib/w3m/cgi-bin/goto_clipboard.cgi"
# Close tab on ctrl-x and undo tab on ctrl-u
keymap  C-x      COMMAND     "EXTERN 'echo %s >> ~/.w3m/RestoreTab.txt' ; CLOSE_TAB"
keymap  C-u      TAB_GOTO    /usr/lib/w3m/cgi-bin/restore_tab.cgi
	</pre>

	<p>To get the magnet.py script to work, you just need to create a ~/.w3m/urimethodmap file with this line added:</p>
	<pre>
magnet: file:/cgi-bin/magnet.py?%s
	</pre>
	<p>Opening a magnet link should now automatically send it to w3m.</p>

	<h3>Tab operations</h3>
	<p>I almost forgot to add this. Here are my keybindings for tabbing. ~/.w3m/keymap</p>
	<pre>
keymap TAB NEXT_TAB
keymap M-TAB PREV_TAB
keymap C-t NEW_TAB
keymap T TAB_MENU
	</pre>
	</div>
	<div class="footer">
		<?php include '../footer.php';?>
	</div>
</body>
</html>
