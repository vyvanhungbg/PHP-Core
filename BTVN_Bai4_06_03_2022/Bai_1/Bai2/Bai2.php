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
<script>
function number(so)
{
    document.cal.cal_box.value += so;
}
function del(){
    var str = document.cal.cal_box.value;
    str = str.substring(0,str.length-1);
    document.cal.cal_box.value = str;
}
</script>

<form name="cal" method="post" action="calculator.php">
    <input name="cal_box"  readonly  size="12">
    <table width="120px">

        <tr>
            <td><button type="button" onClick="number(7)">7</button></td>
            <td><button type="button" onClick="number(8)">8</button></td>
            <td><button type="button" onClick="number(9)">9</button></td>
            <td  align="right"><button type="button" onClick="number('/')">/</button></td>
        </tr>

        <tr>
            <td><button type="button" onClick="number(4)">4</button></td>
            <td><button type="button" onClick="number(5)">5</button></td>
            <td><button type="button" onClick="number(6)">6</button></td>
            <td align="right"><button type="button" onClick="number('*')">*</button></td>
        </tr>

        <tr>
            <td><button type="button" onClick="number(1)">1</button></td>
            <td><button type="button" onClick="number(2)">2</button></td>
            <td><button type="button" onClick="number(3)">3</button></td>
            <td align="right"><button type="button" onClick="number('-')">-</button></td>
        </tr>

        <tr>
            <td><button type="button" onClick="number(0)">0</button></td>
            <td colspan="2" align="center"><button type="submit" >Tính</button></td>
            <td align="right"><button type="button" onClick="number('+')">+</button></td>
        </tr>

        <tr>
            <td colspan="3" ><button type="button" onclick="del()" >X</button></td>
            <td align="right"><button type="reset" >C</button></td>
        </tr>
    </table>
</form>
</body>
</html>
