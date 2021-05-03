<?php
global $row;
?>
<section class="card shadow-sm mb-3">
    <h5 class="card-header">پیام از طرف : <?php echo $row['name']; ?></h5>
    <section class="card-body">
        <h5 class="card-title"><?php echo $row['subject']; ?></h5>
        <p class="card-text"><?php echo $row['message']; ?></p>
        <section class="mt-2">
            <a href="<?php echo_controller("delete-message.php?id={$row['ID']}"); ?>" class="btn btn-outline-danger">حذف</a>
        </section>
    </section>
    <section class="card-footer">
        <p class="card-text">ایمیل : <?php echo $row['email']; ?></p>
    </section>
</section>