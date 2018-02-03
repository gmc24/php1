<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>ДЗ 5 просмотр картинки</title>
</head>
<style>
    .full_pic {
        position: relative;
        text-align: center;
        width: 100%;
        margin: 20px auto;
    }
    .view_counter {
        position: absolute;
        background-color: #fff;
        top: 20px;
        right: 80px;
        font-size: 18px;
        font-family: Tahoma, sans-serif;
        line-height: 32px;
        font-weight: bold;
        padding: 0 20px;
    }
    #close {
        position: absolute;
        top: 20px;
        right: 20px;
        color: #ffffff;
        font-size: 32px;
        cursor: pointer;
        line-height: 1em;
    }
    #close:hover {
        transform: scale(1.1);
    }
</style>
<body>
<?php
require_once('config.php');
require_once('function.php');

if(isset($_GET['id']))
    $ID = htmlspecialchars($_GET['id']);
$sql = "select * from gallery where id = $ID";
$img = getResult($sql);
$sql = "update gallery set views = views + 1 where id = $ID";
if (!executeQuery($sql)) echo "Ошибка записи в БД";
?>
<div class="full_pic">
    <div id="close" onclick="javascript: window.close();">&#11199;</div>
    <div class="view_counter">Просмотров: <?=$img[0]['views']+1?></div>
    <img src="<?=$img[0]['f_path'].$img[0]['name']?>" alt="" />
</div>
</body>
</html>
