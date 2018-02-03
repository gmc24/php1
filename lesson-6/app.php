<?php

require_once('../config/config.php');
require_once('../engine/functions.php');
require_once('../engine/db.php');


$url_array = explode("/", $_SERVER['REQUEST_URI']);
//Если не указан адрес страницы, то считаем что пользователь зашел на главную страницу
if ($url_array[1] == "")
{
	$page_name = "index";
}
else
{
	$page_name = $url_array[1];
}
//Получаем содержимое страницы, в зависимости от адреса перехода

foreach(prepareVariables($page_name) as $key=>$value)
{
	$content[$key] = $value;
}


//include '../templates/bases.php';



?>
