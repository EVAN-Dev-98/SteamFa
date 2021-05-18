<?php
/* Created By Evan ( Sajad Gholami ) */

include "__php__.php";
$alerts = Alert::alerts();
$title = "پنل مدیریت | صفحه اصلی";
get_template("header","panel",$title);
get_template("sidebar","panel");
?>
<section class="panel">
    <header>
        <h2>داشبورد</h2>
    </header>
    <main>
        <?php if (isset($alerts)) echo $alerts; ?>
    </main>
</section>