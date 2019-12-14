<section class="blokas4" id="4"> <!--4 blokas -->
    <div class="container4">
        <div class="stulpelisKaireje">
            <h2><?php the_field('4_section_heading'); ?></h2>
            <p><?php the_field('4_description'); ?></p>
            <?php $link = get_field('3_link'); 
            //dump($link);
            ?>
            <div class="mygt4">
                <a class="mygtukas" href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>			
            </div>
        </div>
    </div>
</section>