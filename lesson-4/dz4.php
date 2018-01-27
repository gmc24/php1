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
    }
    #gallery {
        width: 100%;
        height: 100%;
        display: flex;
        flex-wrap: wrap;
        align-content: space-between;
    }
    #gallery > img {
        width: 100px;
    }
</style>
<body>

<div class="wrap_gal">
    <div id="gallery"></div>
</div>


<form enctype="multipart/form-data" action="?" method="post">
    <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
    Выбрите изображение для загрузки: <input type="file" name="myfile" />
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


    echo "<br><pre>";
    print_r($_FILES);
    echo "</pre>";

    print "<br><pre>";
    if (move_uploaded_file($_FILES['myfile']['tmp_name'],$destination))
    {
        /* перемещаем файл из временной папки
        в выбранную директорию для хранения */
        print "Файл успешно загружен <br>";
    } else
    {
        echo "Произошла ошибка при загрузке файла.
    Некоторая отладочная информация:<br>";
        print_r($_FILES);
    }
    print "</pre>";
}


?>
