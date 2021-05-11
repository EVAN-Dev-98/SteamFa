<?php
global $count;
?>
<tr>
    <th scope="row"><?php echo $count; ?></th>
    <td><?php echo $id; ?></td>
    <td><?php echo $fname; ?></td>
    <td><?php echo $lname; ?></td>
    <td><?php echo $email; ?></td>
    <td><?php if ($role_id == 1) echo "مدیر"; elseif ($role_id == 2) echo "کاربر عادی"; ?></td>
    <td><a href="<?php echo controller("delete-user.php?id={$id}"); ?>" class="btn btn-outline-danger text-light">حذف</a></td>
    <td><a href="<?php echo account("profile-user.php?id={$id}"); ?>" class="btn btn-outline-warning text-light">ویرایش</a></td>
</tr>