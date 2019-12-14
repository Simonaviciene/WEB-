<section class="blokas2" id="2">

<div class="container">
    <div class="apiemus">
        <h2><?php the_field('f_section_heading'); ?></h2>
        <p><?php the_field('f_section_description'); ?></p>
    </div>

    <div class="stulpeliai">
    <?php

    if(have_rows('f_2_repeater')):
    while(have_rows('f_2_repeater')):
        the_row();
        // get_sub_field('lauko_pavadinimas') - grazina reiksme
        // the_sub_field('lauko_pavadinimas') - grazina spausdina
        ?>
        <!-- HTML KURIS KARTOJASI -->
        <div class="ikonos">
            <a href="#"><?php the_sub_field('icon'); ?></a>
            <h3><?php the_sub_field('heading'); ?></h3>
            <p><?php the_sub_field('description'); ?></p>
        </div>
        <?php
    endwhile;
    endif;
    ?>	
    
    </div>
    
        <div class="mygt2">
            <a class="mygtukas" href="#">Learn more</a>			
        </div>
                
</div>	
</section>