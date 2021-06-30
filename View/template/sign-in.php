<?php
get_template("head","",$title);
$email = '';
if (isset($_SESSION['ins-email'])){
    $email = $_SESSION['ins-email'];
    unset($_SESSION['ins-email']);
}

$form = new Form(controller("do-sign-in.php"),"ورود","w-100 btn-lg","my-3");
$form->email_floating("email","ایمیل","required",null,$email);
$form->password_floating("password","گذرواژه","required",null,null,"حداقل 8 کاراکتر و ترکیبی از حروف کوچک و بزرگ و اعداد");

?>
<body class="text-center sign">
    <section class="form-sign-in">
        <a class="d-block mb-4" href="<?php echo view("home.php"); ?>"><img src="<?php echo assets("images/steam-icon.png"); ?>" width="80" height="80" alt="steamfarsi"></a>
        <h2>ورود</h2>
        <?php echo $form; ?>
        <label for="sign-in" class="ms-5 me-2">حساب کاربری ندارید ؟</label>
        <a href="<?php echo account("sign-up.php"); ?>" id="sign-in" class="btn btn-outline-info">ثبت نام کنید</a>
        <?php
        $alerts = Alert::alerts();
        if ($alerts) { ?>
        <section class="mt-3">
            <?php echo $alerts; ?>
        </section>
        <?php } ?>
    </section>
    <?php get_template("bootstrap"); ?>
</body> 