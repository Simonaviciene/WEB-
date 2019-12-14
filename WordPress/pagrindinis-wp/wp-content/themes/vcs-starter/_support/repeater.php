<?php

if(have_rows('repeater_pavadinimas')):
	while(have_rows('repeater_pavadinimas')):
		the_row();
		// get_sub_field('lauko_pavadinimas') - grazina reiksme
		// the_sub_field('lauko_pavadinimas') - grazina spausdina
		?>
		<!-- HTML KURIS KARTOJASI -->
		<?php
	endwhile;
endif;
?>