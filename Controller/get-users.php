<?php

include "__php__.php";
include  $Model . "initializer.php";

$db = new DB();
$table = User::find();
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
                    get_template("users","template");
                }
                ?>
            </tbody>
        </table>
    </main>
</section>
