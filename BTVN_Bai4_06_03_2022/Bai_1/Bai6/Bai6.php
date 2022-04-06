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
include('../main/menu.php')
?>
<form action="result.php" method="POST">
    <table>
        <caption>In ra số nguyên tố nhỏ hơn n</caption>
        <tr>
            <td>Nhập n </td>
            <td><input type="number" name="n_number" ></td>
            <td><button type="submit">In </button></td>
        </tr>
    </table>

</form>
</body>
</html>