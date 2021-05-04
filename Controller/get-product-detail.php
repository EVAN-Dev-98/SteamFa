<?php

include "__php__.php";

if ( isset($_GET['id']) ){
    $db = new DB();
    $table = Product::find("ID = {$_GET['id']}");
    $row = $table[0];
    $alerts = alerts();

    ?>
    <section class="container mt-5">
        <section class="row">
    <?php
        get_template_part("product-detail","template",$row);
    ?>
        </section>
    </section>
    <?php
    }
else{
    redirect(view("home.php"));
}