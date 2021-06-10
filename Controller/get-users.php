<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

if (!Authorization::check("UserViewOther")){
    Alert::alerts("متاسفانه شما مجوز مشاهده کاربران را ندارید!");
    redirect(account("dashboard.php"));
}

$db = new DB();
$table = User::find();
?>
<header>
    <h2>مشاهده کاربران</h2>
</header>
<main>
    <?php
    $alerts = Alert::alerts();
    if ($alerts) echo $alerts;
    ?>
    <table class="table table-dark table-hover">
        <thead>
        <tr>
            <th scope="col">ردیف</th>
            <th scope="col">شناسه کاربری</th>
            <th scope="col">نام</th>
            <th scope="col">نام خانوادگی</th>
            <th scope="col">ایمیل</th>
            <th scope="col">نوع حساب</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
            <?php
            $count = 0;
            foreach ($table as $row){
                $count++;
                get_template_part("users","template",$row);
            }
            ?>
        </tbody>
    </table>
</main>