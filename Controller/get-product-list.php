<?php

include "__php__.php";
include $Model . "initializer.php";

$db = new DB();
$table = Product::find();
$alerts = alerts();

?>
<section class="panel">
    <header>
        <h2>مشاهده آیتم ها</h2>
    </header>
    <main>
        <?php
        if (isset($alerts))
            echo $alerts;
        ?>
        <table class="table table-dark table-hover">
            <thead>
            <tr>
                <th scope="col">ردیف</th>
                <th scope="col">شناسه آیتم</th>
                <th scope="col">نام آیتم</th>
                <th scope="col">نام بازی</th>
                <th scope="col">نوع</th>
                <th scope="col">کیفیت</th>
                <th scope="col">تعداد</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            <?php
            $count = 0;
            foreach ($table as $row){
                $count++;
                get_template("product-list","template");
            }
            ?>
            </tbody>
        </table>
    </main>
</section>
