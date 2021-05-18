<section class="container fix-header">
    <?php
    $alerts = Alert::alerts();
    if (isset($alerts))
        echo $alerts;
    ?>
    <form action="<?php echo controller("do-sign-up.php"); ?>" method="post">
        <h2>ثبت نام</h2>
        <section class="row g-2 mt-5 mb-3">
            <section class="col-md-5">
                <section class="form-floating">
                    <input type="text" class="form-control sf-inputs" name="fname" id="floatingInputName" placeholder="نام" readonly onfocus="this.readOnly=false" onblur="this.readOnly=true" required>
                    <label for="floatingInputName">نام</label>
                </section>
            </section>
            <section class="col-md-7">
                <section class="form-floating">
                    <input type="text" class="form-control sf-inputs" name="lname" id="floatingInputFamily" placeholder="نام خانوادگی" readonly onfocus="this.readOnly=false" onblur="this.readOnly=true">
                    <label for="floatingInputFamily">نام خانوادگی</label>
                </section>
            </section>
        </section>
        <section class="form-floating mb-3">
            <input type="email" class="form-control sf-inputs" name="email" id="floatingInputEmail" placeholder="ایمیل" readonly onfocus="this.readOnly=false" onblur="this.readOnly=true" required>
            <label for="floatingInputEmail">ایمیل</label>
        </section>
        <section class="row g-2 mb-3">
            <section class="col-md">
                <section class="form-floating">
                    <input type="password" class="form-control sf-inputs" name="password" id="floatingPassword" placeholder="گذرواژه" readonly onfocus="this.readOnly=false" onblur="this.readOnly=true" required>
                    <label for="floatingPassword">گذرواژه</label>
                </section>
            </section>
            <section class="col-md">
                <section class="form-floating">
                    <input type="password" class="form-control sf-inputs" name="repassword" id="floatingRePassword" placeholder="تکرار گذرواژه" readonly onfocus="this.readOnly=false" onblur="this.readOnly=true" required>
                    <label for="floatingRePassword">تکرار گذرواژه</label>
                </section>
            </section>
        </section>
        <input type="submit" name="submit" value="ثبت نام" class="btn btn-primary">
    </form>
</section>