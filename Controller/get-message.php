<?php

include "__php__.php";

$db = new DB();
$table = Messages::find();
?>
<section class="panel">
    <header>
        <h2>پیام ها</h2>
    </header>
    <main>
        <?php
        $alerts = Alert::alerts();
        if ($alerts) echo $alerts;
        foreach ($table as $row){
            get_template_part("message","template",$row);
        }
        ?>
    </main>
</section>