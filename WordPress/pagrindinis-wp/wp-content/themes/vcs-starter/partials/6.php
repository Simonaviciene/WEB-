<section class="blokas6" id="6">
    <div class="container6"> <!--6 blokas-->
        <div class="pavadinimasTekstas1">
            <h4><?php the_field('6_section_heading'); ?></h4>
            <p><?php the_field('6_section_description'); ?></p>
        </div>
        <div class="stulpeliai4">
            <?php

                if(have_rows('6_services_repeater')):
                    while(have_rows('6_services_repeater')):
                        the_row();
                        // get_sub_field('lauko_pavadinimas') - grazina reiksme
                        // the_sub_field('lauko_pavadinimas') - grazina spausdina
                        ?>
                             <div class="stulpelis">
                                <div class="ikonele">
                                    <?php the_sub_field('icon'); ?>
                                </div>
                                <div class="pavadinimasTekstas">
                                    <h4><?php the_sub_field('heading'); ?></h4>
                                    <p><?php the_sub_field('description'); ?></p>
                                </div>
                            </div>
                        <?php
                    endwhile;
                endif;
            ?>
           
        </div>
    </div>
</section>