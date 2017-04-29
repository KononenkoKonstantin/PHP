<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
//error_reporting(E_ALL);
$time = strftime('%H');
if ($time >= 5 && $time < 12)
    echo "<span>Доброе утро</span>";
else if ($time >= 12  && $time < 17)
    echo "<span>Добрый день</span>";
else if ($time >= 17  && $time < 23)
    echo "<span>Добрый вечер</span>";
else
    echo "<span>Доброй ночи</span>";

echo '</br>';
$op1 = isset($_POST['op1']) ? $_POST['op1'] : '';
$op2 = isset($_POST['op2']) ? $_POST['op2'] : '';

$cb = $_POST['cb'];
var_dump($cb);

$act = $_POST['action'];
$result;
switch ($act) {
    case '*':
        $result = $op1 * $op2;
        break;
    case '/':
        $result = $op1 / $op2;
        break;
    case '+':
        $result = $op1 + $op2;
        break;
    case '-':
        $result = $op1 - $op2;
        break;
}


?>
<form action="" method="post">

    <input type="checkbox" name="cb">
    <label for="cb">binary</label>
    </br>
    <input type="text" name="op1" value="<?= $op1 ?>">
    <?php if (empty($op1)) {
        echo "<span style='red'>Введите число 1</span>";
    } ?>
    <select name="action" id="">
        <option>*</option>
        <option>/</option>
        <option>+</option>
        <option>-</option>
    </select>
    <input type="text" name="op2" value="<?= $op2 ?>">
    <?php if (empty($op2)) {
        echo "<span style='red'>Введите число 2</span>";
    } ?>
    <span><?= '=' . $result ?></span>
    <br>
    <br>
    <input type="submit">
</form>


</body>
</html>
