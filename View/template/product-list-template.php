<?php
global $count;
?>
<tr>
    <th scope="row"><?php echo $count; ?></th>
    <td><?php echo $row['ID'] ?></td>
    <td><?php echo $row['name'] ?></td>
    <td><?php echo $row['game'] ?></td>
    <td><?php echo $row['type'] ?></td>
    <td><?php echo $row['quality'] ?></td>
    <td><?php echo $row['number'] ?></td>
    <td><a href="<?php echo controller("delete-product.php?id={$row['ID']}"); ?>" class="btn btn-outline-danger text-light">حذف</a></td>
    <td><a href="<?php echo account("edit-product.php?id={$row['ID']}"); ?>" class="btn btn-outline-warning text-light">ویرایش</a></td>
</tr>