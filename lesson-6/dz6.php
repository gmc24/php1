<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>ДЗ 6</title>
</head>
<style>
    .calc1 input, #operation {
        padding: 4px 6px;
    }
    .calc1 * {
        margin-right: 10px;
    }
    .calc1 input:last-of-type {
        text-align: right;
    }
    hr {
        margin: 20px 0 40px;
    }
</style>
<body>
<div>
<pre>
    1. Создать форму-калькулятор операциями: сложение, вычитание, умножение, деление.
    Не забыть обработать деление на ноль! Выбор операции можно осуществлять с помощью тега &lt;select&gt;.
</pre>
<br>
<form class="calc1" enctype="multipart/form-data" action="?" method="post">
    <input type="text" name="a" value="" pattern="\-?\d+((\.|,)\d{0,})?" />
    <input type="text" name="b" value="" pattern="\-?\d+((\.|,)\d{0,})?" />
    <select name="operation" id="operation">
        <option value="plus" selected>Сложение</option>
        <option value="minus">Вычитание</option>
        <option value="multi">Умножение</option>
        <option value="div">Деление</option>
    </select>
    <input type="submit" value=" = " name="do_calc1" /> <input type="text" value="<?=calc1()?>" name="result" readonly/>
</form>
    <?php
    function calc1() {
        if (isset($_POST['do_calc1']))    {

        (float)$a = ($_POST['a']=='')? 0: htmlspecialchars(strip_tags($_POST['a']));
        (float)$b = ($_POST['b']=='')? 0: htmlspecialchars(strip_tags($_POST['b']));

        $oper = $_POST['operation'];

        $result = 0;

        switch ($oper) {
            case 'plus':
                $result = $a + $b;
                break;
            case 'minus':
                $result = $a - $b;
                break;
            case 'multi':
                $result = $a*$b;
                break;
            case 'div':
                $result = ($b == 0)? 'division by zero': $a/$b;
                break;
        }

        return $result;
    } else {
            return 0;
        }
    };
     ?>
</div>
<hr>
<pre>
    2. Создать калькулятор, который будет определять тип выбранной пользователем операции, ориентируясь на нажатую кнопку.
</pre>
<br>
<style>
    .zad2 input[type="radio"] {
        display: none;
    }
    .zad2 input[type="submit"] {
        display: inline-block;
        padding: 6px 8px;
        /*line-height: 1em;*/
        text-align: center;
        font-weight: bold;
        border: 1px solid #666666;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        cursor: pointer;
    }
    .zad2 input[type="submit"]:hover {
        background: #eeeeee;
    }

</style>
<form class="calc1 zad2" enctype="multipart/form-data" action="?" method="post">
    <input type="text" name="a" value="" pattern="\-?\d+((\.|,)\d{0,})?" />
    <input type="text" name="b" value="" pattern="\-?\d+((\.|,)\d{0,})?" />
    <input type="submit" value=" + " name="do_calc2" />
    <input type="submit" value=" &ndash; " name="do_calc2" />
    <input type="submit" value=" &times; " name="do_calc2" />
    <input type="submit" value=" &divide; " name="do_calc2" />
    <input type="text" value="<?=calc2()?>" name="result" readonly/>
</form>
<pre>
<?php
//
//if (isset($_POST['do_calc2'])) {
//
//    print_r($_POST);
//
//}

function calc2() {
    if (isset($_POST['do_calc2']))    {

        (float)$a = ($_POST['a']=='')? 0: htmlspecialchars(strip_tags($_POST['a']));
        (float)$b = ($_POST['b']=='')? 0: htmlspecialchars(strip_tags($_POST['b']));

        $oper = trim($_POST['do_calc2']);

        $result = 0;

        switch ($oper) {
            case '+':
                $result = $a + $b;
                break;
            case html_entity_decode('&ndash;'):
                $result = $a - $b;
                break;
            case html_entity_decode('&times;'):
                $result = $a*$b;
                break;
            case html_entity_decode('&divide;'):
                $result = ($b == 0)? 'division by zero': $a/$b;
                break;
        }

        return $result;
    } else {
        return 0;
    }
};
?>
</pre>