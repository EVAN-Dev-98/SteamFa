<?php
$path = "../";
$title = "تماس با ما | استیم فارسی";
include '../information/settings.php';
include '../information/functions.php';
include '../theme/header.php';
// get values from html
if (1 == 2){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $desc = $_POST['message'];

    $query = "INSERT INTO contact (name , subject , email , description) VALUES ('{$name}' ,'{$subject}' , '{$email}' , '{$desc}')";

    $db = new DB();
    $db->Execute($query);


    $alert = alert("درخواست شما با موفقیت ثبت شد!!!","پس از بررسی پاسخ به ایمیل شما ارسال خواهد شد.","success");
}
else{
    $alert = alert("به صفحه اصلی وبسایت منتقل شوید!","<a href='../index.php'>صفحه اصلی</a>","warning");
}
?>
<html lang="fa">
<body>
<section style="margin-top: 150px"></section>
    <?php if (isset($alert)) echo $alert; ?>
</body>
</html>
<?php
include '../theme/footer.php';
?>