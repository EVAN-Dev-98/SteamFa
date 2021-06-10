<?php
global $count;
?>
<tr>
    <th scope="row"><?php echo $count; ?></th>
    <td><?php echo $id; ?></td>
    <td><?php echo $name; ?></td>
    <td><?php echo $attr_name; ?></td>
    <?php
    if ( $owner_id == Authentication::uid() ) {
        if ( Authorization::check("ItemDelete") ) { ?><td><a href="<?php echo controller("do-delete-item.php?self={$id}"); ?>" class="btn btn-outline-danger text-light">حذف</a></td><?php }
        else{ ?><td></td><?php }
        if ( Authorization::check("ItemEdit") ) { ?><td><a href="<?php echo account("edit-item.php?self={$id}"); ?>" class="btn btn-outline-warning text-light">ویرایش</a></td><?php }
        else{ ?><td></td><?php }
    }
    else {
        if ( Authorization::check("ItemDeleteOther") ) { ?><td><a href="<?php echo controller("do-delete-item.php?id={$id}"); ?>" class="btn btn-outline-danger text-light">حذف</a></td><?php }
        else{ ?><td></td><?php }
        if ( Authorization::check("ItemEditOther") ) { ?><td><a href="<?php echo account("edit-item.php?id={$id}"); ?>" class="btn btn-outline-warning text-light">ویرایش</a></td><?php }
        else{ ?><td></td><?php }
    }
    ?>
</tr>