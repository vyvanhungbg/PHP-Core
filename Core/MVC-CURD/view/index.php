

<table border ='1' >
   <tr>
       <td>
           <a href="?action=create">
               Thêm
           </a></td>
       <th colspan="3">Danh sách sinh viên</th>
   </tr>
    <tr>
        <th>Mã</th>
        <th>Tên</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>
    <?php foreach ($result as $key){ ?>
        <tr>
            <td>
                <?php echo $key['id'] ?>
            </td>
            <td>
                <?php echo $key['name'] ?>
            </td>
            <th><a href="?action=edit&id=<?php echo $key['id'] ?>">Sửa</a></th>
            <th><a href="?action=delete&id=<?php echo $key['id'] ?>">Xóa</a></th>
        </tr>
    <?php } ?>
</table>