<?php
global $count;
?>
<tr <?php if ( $id == Authentication::uid() ) { echo "class='table-warning'"; } ?>>
    <th scope="row"><?php echo $count; ?></th>
    <td><?php echo $id; ?></td>
    <td><?php echo $fname; ?></td>
    <td><?php echo $lname; ?></td>
    <td><?php echo $email; ?></td>
    <td><?php echo role_name( $role_id ); ?></td>
    <?php
    if ( $id == Authentication::uid() ) {
        if ( Authorization::check("UserDelete") ) { ?><td><a href="<?php echo controller("do-delete-user.php?self"); ?>" class="btn btn-outline-danger text-dark">حذف</a></td><?php }
        else{ ?><td></td><?php }
        ?><td><a href="<?php echo account("profile-user.php"); ?>" class="btn btn-outline-info text-dark">پروفایل</a></td><?php
    }
    else {
        if ( Authorization::check("UserDeleteOther") ) { ?><td><a href="<?php echo controller("do-delete-user.php?id={$id}"); ?>" class="btn btn-outline-danger text-light">حذف</a></td><?php }
        else{ ?><td></td><?php }
        if ( Authorization::check("UserEditOther") ) { ?><td><a href="<?php echo account("edit-user.php?id={$id}"); ?>" class="btn btn-outline-warning text-light">ویرایش</a></td><?php }
        else{ ?><td></td><?php }
    }
    ?>
</tr>