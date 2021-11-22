<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">

    <title>Calculator</title>
</head>

<body>
    <div class="container">
        <form action="./calculator.php" method="POST">
            <input type="number" name="num_1" placeholder="select a number">
            <select name="operation">
                <option value=""></option>
                <option value="plus">Plus</option>
                <option value="minus">Minus</option>
                <option value="multiply">Multiply</option>
                <option value="divided">Devide</option>
            </select>
            <input type="number" name="num_2" placeholder="select a number">
            <input type="submit" name="submit" value="calculate">

        </form>
    </div>
</body>

</html>

<?php

if (isset($_POST['submit'])) {

    if (!empty($_POST['num_1']) && !empty($_POST['num_2'])) {

        if ($_POST['operation'] == 'plus') {
            $result = $_POST['num_1'] + $_POST['num_2'];
        }
        if ($_POST['operation'] == 'minus') {
            $result = $_POST['num_1'] - $_POST['num_2'];
        }
        if ($_POST['operation'] == 'multiply') {
            $result = $_POST['num_1'] * $_POST['num_2'];
        }
        if ($_POST['operation'] == 'divided') {
            $result = $_POST['num_1'] / $_POST['num_2'];
        }
        echo "<p>{$_POST['num_1']} {$_POST['operation']} {$_POST['num_2']} equals {$result}</p>";
    } else {
        echo "<p> Choose a number...</p>";
    }
}
?>