<?php

include "__php__.php";

$db = new DB();
$table = Hero::find();
$alerts = Alert::alerts();

?>
<section class="container mt-5">
    <section class="row">
        <?php
        foreach ($table as $row){
            get_template_part("hero","template",$row);
        }
        ?>
    </section>
</section>