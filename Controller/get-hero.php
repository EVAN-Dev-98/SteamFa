<?php

include "__php__.php";

$db = new DB();
$all_heroes = Hero::find();
$Strength = Hero::find("category = 'Strength'");
$Agility = Hero::find("category = 'Agility'");
$Intelligence = Hero::find("category = 'Intelligence'");

?>
<section class="container mt-5 dir-ltr">
    <p class="hero-title">هیرو مورد نظر خود را انتخاب کنید</p>
    <section class="hero-cat">
        <img src="<?php echo assets("images/hero_strength.png"); ?>" alt="hero_category"><h2>Strength</h2>
    </section>
    <section class="row m-0 justify-content-center">
        <?php
        foreach ($Strength as $row){
            get_template_part("hero","template",$row);
        }
        ?>
    </section>
    <section class="hero-cat">
        <img src="<?php echo assets("images/hero_agility.png"); ?>" alt="hero_category"><h2>Agility</h2>
    </section>
    <section class="row m-0 justify-content-center">
        <?php
        foreach ($Agility as $row){
            get_template_part("hero","template",$row);
        }
        ?>
    </section>
    <section class="hero-cat">
        <img src="<?php echo assets("images/hero_intelligence.png"); ?>" alt="hero_category"><h2>Intelligence</h2>
    </section>
    <section class="row m-0 justify-content-center">
        <?php
        foreach ($Intelligence as $row){
            get_template_part("hero","template",$row);
        }
        ?>
    </section>
</section>