<?php
global $count;
?>
<tr>
    <th scope="row"><?php echo $count; ?></th>
    <td><?php echo $id; ?></td>
    <td><?php echo $fname; ?></td>
    <td><?php echo $lname; ?></td>
    <td><?php echo $email; ?></td>
    <td><?php echo role_name( $role_id ); ?></td>
    <?php
    if ( $id == Authentication::uid() ) {
        if ( Authorization::check("UserDelete") ) { ?><td><a href="<?php echo controller("do-delete-user.php?self"); ?>" class="fad fa-trash text-danger h4"></a></td><?php }
        else{ ?><td></td><?php }
        ?><td><a href="<?php echo account("profile-user.php"); ?>" class="fad fa-edit text-info h4"></a></td><?php
    }
    else {
        if ( Authorization::check("UserDeleteOther") ) { ?><td><a href="<?php echo controller("do-delete-user.php?id={$id}"); ?>" class="fad fa-trash text-danger h4"></a></td><?php }
        else{ ?><td></td><?php }
        if ( Authorization::check("UserEditOther") ) { ?><td><a href="<?php echo account("edit-user.php?id={$id}"); ?>" class="fad fa-edit text-warning h4"></a></td><?php }
        else{ ?><td></td><?php }
    }
    ?>
</tr>