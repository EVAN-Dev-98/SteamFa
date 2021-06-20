<?php
$table = User::count("role_id","role_id = {$id}");
$row = $table[0];
$count = $row['Count']
?>
<tr>
    <td><?php echo $name; ?></td>
    <td><?php echo $count; ?></td>
    <?php
        if ( Authorization::check("RoleMaster") ) { ?><td><a href="<?php echo controller("do-delete-role.php?id={$id}"); ?>" class="fad fa-trash text-danger h4"></a></td><?php }
        else{ ?><td></td><?php }
        if ( Authorization::check("RoleMaster") ) { ?><td><a href="<?php echo account("edit-role.php?id={$id}"); ?>" class="fad fa-edit text-warning h4"></a></td><?php }
        else{ ?><td></td><?php }
    ?>
</tr>