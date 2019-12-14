<section class="blokas5" id="5">
    <div class="container5"> <!--5 blokas-->
    <?php 
 $image = get_field('5_image');
 //dump($image);

?> 
        <div class="fonas">
            <img src="<?php echo $image['sizes']['1536x1536']?>">
        </div>
        
        <div class="tekstasSuNuotrauka">
          <?php 
             $image = get_field('5_small_image');
            //dump($image);

            ?> 
            <marquee behavior="scroll" direction="right">
                <div class="nuotrauka">
                    <img src ="<?php echo $image['sizes']['1536x1536']?>">								
                </div>
                <div class="tekstasSuNuotraukas">
                    <h3><?php the_field('5_section_heading'); ?></h3>
                    <h5><?php the_field('5_section_head'); ?></h5>
            </marquee>
            </div>
        </div>
    </div>
</section>