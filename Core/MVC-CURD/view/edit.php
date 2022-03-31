<form method="POST" action="?action=update">
    <input type="hidden" name="id" value="<?php echo $student['id'] ?>">
    <table border="1">
        <th>Cập nhật  sinh viên</th>
        <tr>
            <td>Tên</td>
        </tr>
        <tr>
            <td> <input type="text" name="name" value="<?php echo $student['name']; ?>"></td>
        </tr>
        <tr>
            <td align="center"> <button type="submit"   >Cập nhật</button></td>
        </tr>
    </table>
</form>