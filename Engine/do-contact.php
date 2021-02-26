<?php
$path = "../";
$title = "تماس با ما | استیم فارسی";
include 'settings.php';
include 'functions.php';
include '../Theme/header.php';
include '../Theme/footer.php';
// get values from html
$subject = $_POST['title'];
$email = $_POST['email'];
$desc = $_POST['description'];

$dbc = new mysqli(DBHOST,DBUSER,DBPASS,DBNAME);

if ($dbc->connect_errno){
    echo $dbc->connect_error;
    exit();
}

$dbc->set_charset('utf8mb4');

$query = "INSERT INTO contact (title , email , description) VALUES ('{$subject}' , '{$email}' , '{$desc}')";

$result = $dbc->query($query);

$dbc->close();

$alert = alert("درخواست شما با موفقیت ثبت شد!!!","پس از بررسی پاسخ به ایمیل شما ارسال خواهد شد.","success");
?>
<html lang="fa">
<body>
    <?php if (isset($alert)) echo $alert; ?>
</body>
</html>
