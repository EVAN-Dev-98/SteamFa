<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";
require "Authentication-Check.php";

$alerts = Alert::alerts();

$title = "پنل مدیریت | صفحه اصلی";

get_template("header","panel",$title,$row);
get_template("sidebar","panel",null,$row);
?>
<section class="panel">
    <header>
        <h2>داشبورد</h2>
    </header>
    <main>
        <?php if ($alerts) echo $alerts; ?>
    </main>
</section>
<?php
get_template("footer","panel");
?>