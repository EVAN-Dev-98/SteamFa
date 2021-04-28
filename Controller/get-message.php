<?php

include "__php__.php";
include  $Model . "initializer.php";

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
            get_template("message","template");
        }
        ?>
    </main>
</section>
