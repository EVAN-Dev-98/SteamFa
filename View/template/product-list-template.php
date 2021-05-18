<?php
global $count;
?>
<tr>
    <th scope="row"><?php echo $count; ?></th>
    <td><?php echo $id; ?></td>
    <td><?php echo $name; ?></td>
    <td><?php echo $attr_name; ?></td>
    <td><a href="<?php echo controller("delete-product.php?id={$id}"); ?>" class="btn btn-outline-danger text-light">حذف</a></td>
    <td><a href="<?php echo account("edit-product.php?id={$id}"); ?>" class="btn btn-outline-warning text-light">ویرایش</a></td>
</tr>