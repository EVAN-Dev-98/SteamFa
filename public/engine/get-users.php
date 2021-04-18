<?php

include "__php__.php";

include $inc . "settings.php";
include $inc . "functions.php";

$db = new DB();
$table = Users::find();
$alerts = alerts();

?>
<section class="panel">
    <header>
        <h2>مشاهده کاربران</h2>
    </header>
    <main>
        <table class="table table-dark table-hover">
            <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">شناسه کاربری</th>
                <th scope="col">نام</th>
                <th scope="col">تام کاربری</th>
                <th scope="col">ایمیل</th>
                <th scope="col">نوع حساب</th>
            </tr>
            </thead>
            <tbody>
                <?php
                $count = 0;
                foreach ($table as $row){
                    $count++;
                    get_view("users","panel");
                }
                ?>
            </tbody>
        </table>
    </main>
</section>
