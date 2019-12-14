<section class="blokas8" id="8">
    
    <div class="container8">
        <div class="pasiulymai">
            <div class="pasiulymaiTekstas">	
                <h2><?php the_field('8_section_heading'); ?></h2>					
                <div><?php the_field('8_section_description'); ?></div>
            </div>
        </div>
            
        <div class="anketa">
            <div class="laukas">
                <div action="mail.php" method="post" id="formakontaktu" class="contact__form">
                   <?php echo do_shortcode(get_field('8_form_shortcode')); ?>                
                </div>
            </div>
        </div>
    </div>
    <marquee behavior="scroll" direction="left"><img src="//www.html.am/images/html-codes/marquees/fish-swimming.gif" width="94" height="88" alt="Swimming fish" /></marquee>

</section>
