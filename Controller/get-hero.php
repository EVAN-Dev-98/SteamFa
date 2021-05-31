<?php

include "__php__.php";

$db = new DB();
$Strength = Hero::find("category = 'Strength'");
$Agility = Hero::find("category = 'Agility'");
$Intelligence = Hero::find("category = 'Intelligence'");

?>
<section class="container mt-5">
    <section class="accordion" id="accordionPanelsStayOpenExample">
        <section class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    هیرو های Strength
                </button>
            </h2>
            <section id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                <section class="accordion-body">
                    <section class="row dir-ltr">
                        <?php
                        foreach ($Strength as $row){
                            get_template_part("hero","template",$row);
                        }
                        ?>
                    </section>
                </section>
            </section>
        </section>
        <section class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                    هیرو های Agility
                </button>
            </h2>
            <section id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                <section class="accordion-body">
                    <section class="row dir-ltr">
                        <?php
                        foreach ($Agility as $row){
                            get_template_part("hero","template",$row);
                        }
                        ?>
                    </section>
                </section>
            </section>
        </section>
        <section class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    هیرو های Intelligence
                </button>
            </h2>
            <section id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                <section class="accordion-body">
                    <section class="row dir-ltr">
                        <?php
                        foreach ($Intelligence as $row){
                            get_template_part("hero","template",$row);
                        }
                        ?>
                    </section>
                </section>
            </section>
        </section>
    </section>
</section>