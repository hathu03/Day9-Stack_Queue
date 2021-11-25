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
<form action="" method="post">
    <table style="border: 1px groove;border: 0.6px solid #DCDCDC;box-sizing: border-box;border-radius: 5px;">
        <tr>
            <td>
                <h3>Change Decimal Number to Binary Number</h3>
                <input type="number" name="number" placeholder="Enter Decimal Number"
                       style="border-radius: 4px; border: 1px solid; height: 20px">
                <button style="background-color: cornflowerblue; color: white; border: none; border-radius: 4px; height: 23px">
                    Change
                </button>
            </td>
        </tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
    </table>

</form>
</body>
</html>

<?php
include_once "Stack.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_REQUEST['number'])) {
        $number = $_REQUEST['number'];
        convertDecimalToBinary($number);
    }
}
function convertDecimalToBinary($number)
{
    $stack = new Stack(100);
    while ($number / 2 != 0) {
        $mod = $number % 2;
        $stack->push($mod);
        $number = floor($number / 2);
    }
    $str = "";
    $count = count($stack->stack);
    for ($i = 0; $i < $count; $i++) {
        $str = $str . $stack->pop();
    }
    echo 'Binary Number is: ' . $str;
}