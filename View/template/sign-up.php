<section class="container fix-header">
    <form action="<?php echo_controller("do-sign-up.php"); ?>" method="post">
        <h2>ثبت نام</h2>
        <section class="mb-3">
            <label for="name" class="form-label">نام و نام خانوادگی : </label>
            <input type="text" class="form-control" id="name" name="name" required>
        </section>
        <section class="mb-3">
            <label for="email" class="form-label">ایمیل : </label>
            <input type="email" class="form-control" id="email" name="email" required>
        </section>
        <section class="mb-3">
            <label for="username" class="form-label">نام کاربری : </label>
            <input type="text" class="form-control" id="username" name="username" required>
        </section>
        <section class="mb-3">
            <label for="password" class="form-label">گذرواژه : </label>
            <input type="password" class="form-control" id="password" name="password" required>
        </section>
        <section class="mb-3">
            <label for="repassword" class="form-label">تکرار گذرواژه : </label>
            <input type="password" class="form-control" id="repassword" name="repassword" required>
        </section>
        <input type="submit" name="submit" value="ثبت نام" class="btn btn-primary">
    </form>
</section>