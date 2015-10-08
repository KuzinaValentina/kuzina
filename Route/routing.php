<?php
	echo $_SERVER['REQUEST_URI'];
	
	$uri=$_SERVER['REQUEST_URI'];

	$u = explode('?', $uri);
	$uri = $u[0];
	echo "<br>newUri=".$uri;
	if ($uri == '/kuzina/' OR $uri == '/kuzina/index.php')
	{
		list_action();
	}
	elseif ($uri == '/kuzina/index.php/admin')
	{
		admin_action();
	}
	elseif ($uri == '/kuzina/index.php/show')
	{
		show_action($_REQUEST['id']);
	}