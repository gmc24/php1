<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>ДЗ 5</title>
</head>
<style>
    .wrap_gal {
        width: 530px;
        min-height: 300px;
        margin: 30px auto;
        border: 3px solid #666666;
        padding: 5px;
        text-align: center;
    }
    #gallery {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }
    #gallery img {
        /*width: 100px;*/
    }
    #gallery a {
        position: relative;
        display: inline-block;
        text-transform: none;
        text-decoration: none;
        color: #000;
        transform: scale(1);
        z-index: auto;
    }
    #gallery a:hover {
        transform: scale(1.05);
        z-index: 100;
    }
    .label_id, .label_views {
        position: absolute;
        line-height: 1em;
        padding:6px;
        text-align: center;
        background-color: rgba(255,255,255,0.6);
    }
    .label_id {
        top: 0;
        left: 0;
    }
    .label_views {
        right: 0;
        bottom: 0;
    }
</style>
<body>
<?php
require_once('resize.php');
require_once('config.php');
require_once('function.php');
?>

<div class="wrap_gal">
    <div id="gallery">
        <?php
        $sql = "SELECT * FROM gallery ORDER BY views DESC";
        $gallery = getResult($sql);

        foreach($gallery as $i => $img): ?>

<!--            <a href="--><?//=$img['f_path'].$img['name']?><!--" target="_blank">-->
            <a href="dz5-fullszpic.php?id=<?=$img['id']?>" target="_blank">
                <span class="label_id">id: <?=$img['id']?></span>
                <span class="label_views">&#128065; <?=$img['views']?></span>
                <img src="<?=$img['th_path'].$img['name']?>" alt=""/>
            </a>
        <?php endforeach; ?>

    </div>
</div>


<form enctype="multipart/form-data" action="?" method="post">
    <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
    Выберите изображение для загрузки: <input type="file" name="myfile" />
    <input type="submit" value="Загрузить" name="nextimg" />
</form>

<div id="service">
<?php

if (isset($_POST['nextimg']))
{
    $uploaddir = 'img/';
    $saveThmb = $uploaddir  . 'thmbs/';
    $newImgName = md5(uniqid().microtime()) . '.jpg';
//    $dest = $uploaddir . $newImgName;
//    $th_dest = $saveThmb . $newImgName;

    if ($_FILES['myfile']['type'] == 'image/jpeg' && (int)$_FILES['myfile']['size'] <= 1048576) {
        print "<br><pre>";
        if (move_uploaded_file($_FILES['myfile']['tmp_name'],$uploaddir.$newImgName))
        {
            $imgSize = $_FILES['myfile']['size'];
            create_thumbnail($uploaddir.$newImgName, $saveThmb.$newImgName, 250, 141);
            $sql = "INSERT INTO gallery (name, size, f_path, th_path) VALUES ('$newImgName', '$imgSize', '$uploaddir', '$saveThmb')";
            if (executeQuery($sql)) {
                print "<span id='do_reload'>Файл успешно загружен</span><br>";
                print "<script>setTimeout('window.location.href =\'dz5.php\'', 1000);</script>";
            };
        } else
        {
            echo "Произошла ошибка при загрузке файла.";
            die('error');
        };

    } else {
        echo "<br/>Loaded file in not an image OR it's size more than 1Mb! Try again!";
    }
}

?>
</div>