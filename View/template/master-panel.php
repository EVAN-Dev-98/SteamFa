<?php
/* Created By Evan ( Sajad Gholami ) */
require $Controller . "Panel-Authentication-Check.php";
get_template("head","",$title);
?>
<body>
<?php
get_template("header","panel",null,$row);
?>
<section class="row m-0 dir-rtl">
    <?php
    get_template("sidebar","panel",null,$row);
    ?>
    <section class="col panel shadow">
        <?php main($row); ?>
    </section>
</section>
<?php
get_template("footer","panel");
?>
</body>