<?php

include "__php__.php";

$db = new DB();
$table = Product::find();
?>
<section class="panel">
    <header>
        <h2>مشاهده آیتم ها</h2>
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
                <th scope="col">شناسه آیتم</th>
                <th scope="col">نام آیتم</th>
                <th scope="col">نام بازی</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            <?php
            $count = 0;
            foreach ($table as $row){
                $count++;
                get_template_part("product-list","template",$row);
            }
            ?>
            </tbody>
        </table>
    </main>
</section>
