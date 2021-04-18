<?php
global $row;
global $count;
?>
<tr>
    <th scope="row"><?php echo $count; ?></th>
    <td><?php echo $row['ID'] ?></td>
    <td><?php echo $row['name'] ?></td>
    <td><?php echo $row['username'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php if ($row['type'] == 0) echo "مدیر"; elseif ($row['type'] == 1) echo "کاربر عادی"; ?></td>
</tr>