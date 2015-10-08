<?php
/**
* дальше комментарии функции 
* Контроллер содержит функции- экшены,
* которые заставляют модель вывести нужную 
* информацию
*************************************
*/

/**
* Mассив $posts содержит выборку всех полей из 
* таблицы post.
* Подгружает файл list.php содержащий вид вывода.
* информации из $posts в браузере.
*/
function list_action()
{
$posts=get_all_posts();
require 'View/Templates/list.php';
}
function admin_action()
{
	require "View/Templates/admin.php";
}
function show_action($id)
{
$post=get_post($id);
require 'View/Templates/show.php';
}
function add_action($id)
{
$post=get_post($id);
require 'View/Templates/show.php';
}
