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
    <table border="1" >
       <th colspan="2">
           Mặt hàng
       </th>
        <tr>
            <td>Tên</td>
            <td>Giá</td>
        </tr>

        <tr>
            <td><?php echo $phone['name']?></td>
            <td><?php echo $phone['price']?></td>
        </tr>



    </table>

<a href="controller.php"> Quay lại </a>
</body>
</html>