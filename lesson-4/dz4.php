<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>ДЗ 4</title>
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
        width: 100px;
    }
</style>
<body>

<div class="wrap_gal">
    <div id="gallery"><?php reload_gallery();?></div>
</div>


<form enctype="multipart/form-data" action="?" method="post">
    <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
    Выберите изображение для загрузки: <input type="file" name="myfile" />
    <input type="submit" value="Загрузить" name="nextimg" />
</form>

<?php
if (isset($_POST['nextimg']))
{
    $uploaddir = 'img/';
    // будем сохранять загружаемые
    // файлы в эту директорию
    $destination = $uploaddir.$_FILES['myfile']['name'];
    // имя файла оставим неизменным

    if ($_FILES['myfile']['type'] == 'image/jpeg' && (int)$_FILES['myfile']['size'] <= 1048576) {
        print "<br><pre>";
        if (move_uploaded_file($_FILES['myfile']['tmp_name'],$destination))
        {
            /* перемещаем файл из временной папки
            в выбранную директорию для хранения */
            print "Файл успешно загружен <br>";
            echo "<script></script>";
        } else
        {
            echo "Произошла ошибка при загрузке файла.";
        };

    } else {
        echo "<br/>Loaded file in not an image OR it's size more than 1Mb! Try again!";
    }


}

function reload_gallery() {
    $dir = 'img/';
    $files = scandir($dir);
    for ($i = 0; $i < count($files); $i++) {
        if (($files[$i] != ".") && ($files[$i] != "..")) {
            $path = $dir.$files[$i];
            echo "<a href='$path' target='_blank'>";
            echo "<img src='$path' alt=''/>";
            echo "</a>";
        }
    }
};


?>
