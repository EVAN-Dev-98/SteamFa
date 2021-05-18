<section class="container fix-header">
    <form action="<?php echo controller("do-sign-in.php"); ?>" method="post">
        <h2>ورود</h2>
        <section class="form-floating mt-5 mb-3">
            <input type="email" class="form-control sf-inputs" name="email" id="floatingInputEmail" placeholder="ایمیل" value="" readonly onfocus="this.readOnly=false" onblur="this.readOnly=true" required>
            <label for="floatingInputEmail">ایمیل</label>
        </section>
        <section class="form-floating mb-3">
            <input type="password" class="form-control sf-inputs" name="password" id="floatingPassword" placeholder="گذرواژه" readonly onfocus="this.readOnly=false" onblur="this.readOnly=true" required>
            <label for="floatingPassword">گذرواژه</label>
        </section>
        <input type="submit" name="submit" value="ورود" class="btn btn-primary">
    </form>
</section>