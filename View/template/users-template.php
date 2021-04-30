<?php
global $row;
global $count;
?>
<tr>
    <th scope="row"><?php echo $count; ?></th>
    <td><?php echo $row['ID'] ?></td>
    <td><?php echo $row['name'] ?></td>
    <td><?php echo $row['family'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php if ($row['type'] == 0) echo "مدیر"; elseif ($row['type'] == 1) echo "کاربر عادی"; ?></td>
    <td><a href="<?php  ?>" class="btn btn-outline-danger text-light">حذف</a></td>
    <td><a href="<?php echo_account("profile-user.php?id={$row['ID']}"); ?>" class="btn btn-outline-warning text-light">ویرایش</a></td>
</tr>