<?php
include "__php__.php";

if (!Authorization::check("ItemEdit")){
    Alert::alerts("متاسفانه شما مجوز مشاهده آیتم های خود را ندارید!");
    redirect(account("dashboard.php"));
}

$db = new DB();
$id = Authentication::uid();
$table = Product::find("owner_id = {$id}");
?>
<header>
    <h2>مشاهده آیتم های شما</h2>
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
        if ($count == 0 ){ ?> <h3 class="text-center">متاسفانه آیتمی برای نمایش وجود ندارد</h3> <?php }
        ?>
        </tbody>
    </table>
</main>