<header>
    <h2>تغییر گذرواژه</h2>
</header>
<main>
    <?php $alerts = Alert::alerts();
    if ($alerts) echo $alerts; ?>
    <form class="" action="<?php echo controller("do-change-password.php"); ?>" method="post">
        <section class="form-floating mb-3">
            <input type="password" class="form-control" name="password-now" id="floatingPasswordNow" placeholder="1" required>
            <label for="floatingPasswordNow">گذرواژه فعلی</label>
        </section>
        <section class="form-floating mb-3">
            <input type="password" class="form-control" name="password-new" id="floatingPasswordNew" placeholder="2" required>
            <label for="floatingPasswordNew">گذرواژه جدید</label>
        </section>
        <section class="form-floating mb-3">
            <input type="password" class="form-control" name="re-password-new" id="floatingRePasswordNew" placeholder="3" required>
            <label for="floatingRePasswordNew">تکرار گذرواژه جدید</label>
        </section>
        <input type="submit" name="submit" value="تغییر گذرواژه" class="w-100 btn-lg btn btn-primary mb-3">
        <label for="sign-in" class="ms-5 me-2">گذرواژه خود را فراموش کرده اید؟</label>
        <a href="#" id="sign-in" class="btn btn-outline-info">فراموشی گذرواژه</a>
        <?php
        $alerts = Alert::alerts();
        if ($alerts) { ?>
            <section class="mt-3">
                <?php echo $alerts; ?>
            </section>
        <?php } ?>
    </form>
</main>