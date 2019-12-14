<section class="blokas7" id="7">
    <div class="container7">
        <div class="MeetOurTeam">
            <h4>Meet our team</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur feugiat nisi in mauris dapibus vehicula.</p>
        </div>
        <div class="galerija">
             <?php
                if(have_rows('7_galerija_repeater')):
                    while(have_rows('7_galerija_repeater')):
                        the_row();
                        // get_sub_field('lauko_pavadinimas') - grazina reiksme
                        // the_sub_field('lauko_pavadinimas') - grazina spausdina
                        ?>
                        <?php 
                        $image = get_sub_field('image');
                        //dump($image);

                        ?> 
                        <a href="assets/img/alberteinste1.jpg" data-fancybox data-caption ="Albert Einstein">		
                            <img src="<?php echo $image['sizes']['1536x1536']?>"/>
                        </a>
                        <?php
                    endwhile;
                endif;
            ?>

            <!-- <a href="assets/img/alberteinste1.jpg" data-fancybox data-caption ="Albert Einstein">		
                <img src="assets/img/alberteinste1.jpg"/></a>
            <a href="assets/img/alberteinste1.jpg" data-fancybox data-caption ="Albert Einstein">		
                <img src="assets/img/alberteinste1.jpg"/></a>					
            <a href="assets/img/alberteinste1.jpg" data-fancybox data-caption ="Albert Einstein">		
                <img src="assets/img/alberteinste1.jpg"/></a>
            <a href="assets/img/alberteinste1.jpg" data-fancybox data-caption ="Albert Einstein">		
                <img src="assets/img/alberteinste1.jpg"/></a>
            <a href="assets/img/alberteinste1.jpg" data-fancybox data-caption ="Albert Einstein">		
                <img src="assets/img/alberteinste1.jpg"/></a>
            <a href="assets/img/alberteinste1.jpg" data-fancybox data-caption ="Albert Einstein">		
                <img src="assets/img/alberteinste1.jpg"/></a>
            <a href="assets/img/alberteinste1.jpg" data-fancybox data-caption ="Albert Einstein">		
                <img src="assets/img/alberteinste1.jpg"/></a>
            <a href="assets/img/alberteinste1.jpg" data-fancybox data-caption ="Albert Einstein">		
                <img src="assets/img/alberteinste1.jpg"/></a>
            <a href="assets/img/alberteinste1.jpg" data-fancybox data-caption ="Albert Einstein">		
                <img src="assets/img/alberteinste1.jpg"/></a>
            <a href="assets/img/alberteinste1.jpg" data-fancybox data-caption ="Albert Einstein">		
                <img src="assets/img/alberteinste1.jpg"/></a> -->
        </div>
    </div>
</section>