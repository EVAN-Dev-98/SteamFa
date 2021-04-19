<?php

include "__php__.php";

include $inc . "settings.php";
include $inc . "functions.php";

$db = new DB();
$table = Messages::find();
$alerts = alerts();

?>
<section class="panel">
    <header>
        <h2>پیام ها</h2>
    </header>
    <main>
        <?php
        foreach ($table as $row){
            get_view("message","panel");
        }
        ?>
    </main>
</section>
