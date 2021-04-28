<section class="container fix-header">
    <form action="<?php echo_controller("do-sign-in.php"); ?>" method="post">
        <h2>ورود</h2>
        <section class="mb-3">
            <label for="username" class="form-label">نام کاربری : </label>
            <input type="text" class="form-control" id="username" name="username" placeholder="ایمیل یا نام کاربری" required>
        </section>
        <section class="mb-3">
            <label for="password" class="form-label">گذرواژه : </label>
            <input type="password" class="form-control" id="password" name="password" required>
        </section>
        <input type="submit" name="submit" value="ورود" class="btn btn-primary">
    </form>
</section>