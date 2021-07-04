<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

if (!Authorization::check("MessageViewOther")){
    Alert::alerts("متاسفانه شما مجوز مشاهده پیام های تماس با ما را ندارید!");
    redirect(account("dashboard.php"));
}

$db = new DB();
$table = Messages::find();
?>
<header>
    <h2>پیام ها</h2>
</header>
<main>
    <?php
    $alerts = Alert::alerts();
    if ($alerts) echo $alerts;
    $count = 0;
    foreach ($table as $row){
        get_template_part("message","template",$row);
        $count++;
    }
    if ($count == 0 ){ ?> <h3 class="text-center">متاسفانه پیامی برای نمایش وجود ندارد</h3> <?php }
    ?>
</main>