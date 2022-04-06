

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
    <?php foreach ($arrayStudent as $key){ ?>
        <tr>
            <td>
                <?php echo $key->getId(); ?>
            </td>
            <td>
                <?php echo $key->getName(); ?>
            </td>
            <th><a href="?action=edit&id=<?php echo $key->getId(); ?>">Sửa</a></th>
            <th><a href="?action=delete&id=<?php echo $key->getId(); ?>">Xóa</a></th>
        </tr>
    <?php } ?>
</table>