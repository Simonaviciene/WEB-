<header class="blokas1">

<?php 
 $image = get_field('hh_bg');
//  dump($image);

?> 
	<div class="pagrindinis">
		<img src="<?php echo $image['sizes']['1536x1536']?>">			
	</div>
    
    <section class="titulinis" data-ride="carousel">	
        <div class="slideText">            
             <div class="pirmaEilute">
                <h1><?php the_field('hh_pre_title'); ?> </h1>
            </div>				 
            <div class="antraEilute">
                <p><?php the_field('hh_description'); ?></p>   
            </div>	
        </div>
            <div class="button1">
                <div class="mygt1">
                <?php
                 $link = get_field('hh_link');
                 //dump($link);
                 if($link): 
                    ?> 
                    <a class="mygtukas" href="#">Learn more</a>	
                    <?php
                 endif;
                    ?>
                </div>
            </div> 
    </section>
</header>