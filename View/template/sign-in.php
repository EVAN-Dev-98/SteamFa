<?php
get_template("head","",$title);
if (isset($_SESSION['ins-email'])){
    $email = $_SESSION['ins-email'];
    unset($_SESSION['ins-email']);
}
?>
<body class="text-center sign">
    <form class="form-sign-in" action="<?php echo controller("do-sign-in.php"); ?>" method="post">
        <a class="d-block mb-4" href="<?php echo view("home.php"); ?>"><img src="<?php echo assets("images/steam-icon.png"); ?>" width="80" height="80" alt="steamfarsi"></a>
        <h2>ورود</h2>
        <?php echo Form::CSRF_Token(); ?>

        <section class="form-floating mt-4 mb-3">
            <input type="email" class="form-control" name="email" id="floatingInputEmail" placeholder="ایمیل" value="<?php if (isset($email)) echo $email; ?>" required>
            <label for="floatingInputEmail">ایمیل</label>
        </section>
        <section class="form-floating mb-3">
            <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="گذرواژه" required>
            <label for="floatingPassword">گذرواژه</label>
        </section>
        <input type="submit" name="submit" value="ورود" class="w-100 btn-lg btn btn-primary mb-3">
        <label for="sign-in" class="ms-5 me-2">حساب کاربری ندارید ؟</label>
        <a href="<?php echo account("sign-up.php"); ?>" id="sign-in" class="btn btn-outline-info">ثبت نام کنید</a>
        <?php
        $alerts = Alert::alerts();
        if ($alerts) { ?>
        <section class="mt-3">
            <?php echo $alerts; ?>
        </section>
        <?php } ?>
    </form>
    <?php get_template("bootstrap"); ?>
</body> 