<section class="container fix-header">
    <?php
    $alerts = Alert::alerts();
    if ($alerts) echo $alerts;
    if (isset($_SESSION['ins-params'])){
        $params = $_SESSION['ins-params'];
        unset($_SESSION['ins-params']);
        extract($params);
    }
    ?>
    <form action="<?php echo controller("do-sign-up.php"); ?>" method="post">
        <h2>ثبت نام</h2>
        <section class="row g-2 mt-5 mb-3">
            <section class="col-md-5">
                <section class="form-floating">
                    <input type="text" class="form-control readonly" name="fname" id="floatingInputName" value="<?php if (isset($fname)) echo $fname; ?>" placeholder="نام" required>
                    <label for="floatingInputName">نام</label>
                </section>
            </section>
            <section class="col-md-7">
                <section class="form-floating">
                    <input type="text" class="form-control readonly" name="lname" id="floatingInputFamily" value="<?php if (isset($lname)) echo $lname; ?>" placeholder="نام خانوادگی">
                    <label for="floatingInputFamily">نام خانوادگی</label>
                </section>
            </section>
        </section>
        <section class="form-floating mb-3">
            <input type="email" class="form-control readonly" name="email" id="floatingInputEmail" value="<?php if (isset($email)) echo $email; ?>" placeholder="ایمیل" required>
            <label for="floatingInputEmail">ایمیل</label>
        </section>
        <section class="row g-2 mb-5">
            <section class="col-md">
                <section class="form-floating">
                    <input type="password" class="form-control readonly" name="password" id="floatingPassword" placeholder="گذرواژه" required>
                    <label for="floatingPassword">گذرواژه</label>
                </section>
            </section>
            <section class="col-md">
                <section class="form-floating">
                    <input type="password" class="form-control readonly" name="re-password" id="floatingRePassword" placeholder="تکرار گذرواژه" required>
                    <label for="floatingRePassword">تکرار گذرواژه</label>
                </section>
            </section>
        </section>
        <input type="submit" name="submit" value="ثبت نام" class="btn btn-primary">
        <label for="sign-in" class="ms-5 me-2">حساب کاربری دارید ؟</label>
        <a href="<?php echo account("sign-in.php"); ?>" id="sign-in" class="btn btn-outline-info">وارد شوید</a>
    </form>
</section>