<?php
$DB_HOSTNAME ="localhost";
$USERNAME = "root";
$PASSWORD = "";
$DATABASE_NAME = "aws_example";
$connect = mysqli_connect($DB_HOSTNAME,$USERNAME,$PASSWORD,$DATABASE_NAME);
if(!$connect){
die("Lỗi kết nối : ". mysqli_connect_error());
}
$sql_query = "select * from user";
$result = mysqli_query($connect,$sql_query);
?>
    <a href="index.php">Đăng kí tài khoản</a>
    <table border="1"  width="100%" >

        <tr>
            <th align="center">ID </th>
            <th align="center">Loại tài khoản </th>
            <th align="center">Full Name  </th>
            <th align="center">Country  </th>
            <th align="center">Address</th>
            <th align="center">Building  </th>
            <th align="center">City</th>
            <th align="center">State/Province or Region</th>
            <th align="center">Postal Code</th>
            <th align="center">Phone Number</th>

        </tr>
<?php foreach($result as $row) {?>

            <tr>
                <td><?php echo $row['id']  ?></td>
                <td><?php echo ($row['type_account'] == 1)? "Personal account" : "Company account"?></td>
                <td><?php echo $row['full_name'] ?></td>
                <td><?php echo $row['country']?></td>
                <td><?php echo $row['address']?></td>
                <td><?php echo $row['building'] ?></td>
                <td><?php echo $row['city'] ?></td>
                <td><?php echo $row['province'] ?></td>
                <td><?php echo $row['postal_code'] ?></td>
                <td><?php echo $row['phone_number'] ?></td>
            </tr>

<?php } ?>
    </table>
