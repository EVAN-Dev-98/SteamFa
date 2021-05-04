<?php
global $count;
?>
<tr>
    <th scope="row"><?php echo $count; ?></th>
    <td><?php echo $ID; ?></td>
    <td><?php echo $name; ?></td>
    <td><?php echo $game; ?></td>
    <td><?php echo $type; ?></td>
    <td><?php echo $quality; ?></td>
    <td><?php echo $number; ?></td>
    <td><a href="<?php echo controller("delete-product.php?id={$ID}"); ?>" class="btn btn-outline-danger text-light">حذف</a></td>
    <td><a href="<?php echo account("edit-product.php?id={$ID}"); ?>" class="btn btn-outline-warning text-light">ویرایش</a></td>
</tr>