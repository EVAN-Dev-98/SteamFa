<?php
global $row;
global $count;
?>
<tr>
    <th scope="row"><?php echo $count; ?></th>
    <td><?php echo $row['ID'] ?></td>
    <td><?php echo $row['fname'] ?></td>
    <td><?php echo $row['lname'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php if ($row['role_id'] == 1) echo "مدیر"; elseif ($row['role_id'] == 2) echo "کاربر عادی"; ?></td>
    <td><a href="<?php echo_controller("delete-user.php?id={$row['ID']}"); ?>" class="btn btn-outline-danger text-light">حذف</a></td>
    <td><a href="<?php echo_account("profile-user.php?id={$row['ID']}"); ?>" class="btn btn-outline-warning text-light">ویرایش</a></td>
</tr>