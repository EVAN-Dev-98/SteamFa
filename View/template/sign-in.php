<section class="container fix-header">
    <?php
    $alerts = Alert::alerts();
    if ($alerts) echo $alerts;
    if (isset($_SESSION['ins-email'])){
        $email = $_SESSION['ins-email'];
        unset($_SESSION['ins-email']);
    }
    ?>
    <form action="<?php echo controller("do-sign-in.php"); ?>" method="post">
        <h2>ورود</h2>
        <section class="form-floating mt-5 mb-3">
            <input type="email" class="form-control readonly" name="email" id="floatingInputEmail" placeholder="ایمیل" value="<?php if (isset($email)) echo $email; ?>" required>
            <label for="floatingInputEmail">ایمیل</label>
        </section>
        <section class="form-floating mb-5">
            <input type="password" class="form-control readonly" name="password" id="floatingPassword" placeholder="گذرواژه" required>
            <label for="floatingPassword">گذرواژه</label>
        </section>
        <input type="submit" name="submit" value="ورود" class="btn btn-primary">
        <label for="sign-in" class="ms-5 me-2">حساب کاربری ندارید ؟</label>
        <a href="<?php echo account("sign-up.php"); ?>" id="sign-in" class="btn btn-outline-info">ثبت نام کنید</a>
    </form>
</section>