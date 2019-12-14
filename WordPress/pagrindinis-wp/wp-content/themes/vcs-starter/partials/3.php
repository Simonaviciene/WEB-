<section class="blokas3" id="3"> <!--3 blokas -->
    <div class="container3">
        <div class="stulpelisDesineje">
            <h2><?php the_field('3_section_heading'); ?></h2>
            <p><?php the_field('3_description'); ?></p>
            <?php $link = get_field('3_link'); 
            //dump($link);
            ?>
            
            <div class="mygt3">
                <a class="mygtukas" href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>			
            </div>
        </div>				
    </div>
</section>