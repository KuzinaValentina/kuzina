<?php

// Создаем ддескриптор базы данных
function open_database_connection(){

	$link=mysql_connect('localhost', 'kuzina', '123');

	mysql_select_db('kuzina', $link);

	mysql_query('SET NAMES utv8');
	return $link;
}

function close_database_connection($link){
		mysql_close($link);
}

function get_all_posts(){
	
	$link= open_database_connection();
	$sql ="SELECT * FROM post";
	$result=mysql_query($sql,$link);
	$posts=array();

	while($row=mysql_fetch_assoc($result)){
		$posts[]=$row;
	}

	close_database_connection($link);
	
	return $posts;
}