<section class="card shadow-sm mb-3">
    <h5 class="card-header">پیام از طرف : <?php echo $name; ?></h5>
    <section class="card-body">
        <h5 class="card-title"><?php echo $subject; ?></h5>
        <p class="card-text"><?php echo $message; ?></p>
        <section class="mt-2">
            <a href="<?php echo controller("delete-message.php?id={$id}"); ?>" class="btn btn-outline-danger">حذف</a>
        </section>
    </section>
    <section class="card-footer">
        <p class="card-text">ایمیل : <?php echo $email; ?></p>
    </section>
</section>