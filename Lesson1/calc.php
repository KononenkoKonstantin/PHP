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
$op1 = 0;
$op2 = 0;
$op1 = isset($_POST['op1']) ? $_POST['op1'] : '';
$op2 = isset($_POST['op2']) ? $_POST['op2'] : '';


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
