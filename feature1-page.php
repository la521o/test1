<?php

//Force full-width-content layout setting
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

remove_action('genesis_loop','genesis_do_loop');
//add_action('genesis_loop','front_images');



function front_images(){ ?>

	<div class="masonry">
		<img src="<?php echo CHILD_URL; ?>/images/photos/photo1.jpg" alt="">
		<img src="<?php echo CHILD_URL; ?>/images/photos/photo2.jpg" alt="">
		<img src="<?php echo CHILD_URL; ?>/images/photos/photo3.jpg" alt="">
		<img src="<?php echo CHILD_URL; ?>/images/photos/photo4.jpg" alt="">
		<img src="<?php echo CHILD_URL; ?>/images/photos/photo5.jpg" alt="">
		<img src="<?php echo CHILD_URL; ?>/images/photos/photo6.jpg" alt="">
		<img src="<?php echo CHILD_URL; ?>/images/photos/photo7.jpg" alt="">
		<img src="<?php echo CHILD_URL; ?>/images/photos/photo8.jpg" alt="">
		<img src="<?php echo CHILD_URL; ?>/images/photos/photo9.jpg" alt="">
		<img src="<?php echo CHILD_URL; ?>/images/photos/photo10.jpg" alt="">
		<img src="<?php echo CHILD_URL; ?>/images/photos/photo11.jpg" alt="">
<!--		<img src="<?php echo CHILD_URL; ?>/images/photos/photo12.jpg" alt="">
		<img src="<?php echo CHILD_URL; ?>/images/photos/photo13.jpg" alt="">
		<img src="<?php echo CHILD_URL; ?>/images/photos/photo14.jpg" alt="">
		<img src="<?php echo CHILD_URL; ?>/images/photos/photo15.jpg" alt="">
		<img src="<?php echo CHILD_URL; ?>/images/photos/photo16.jpg" alt="">
		<img src="<?php echo CHILD_URL; ?>/images/photos/photo17.jpg" alt="">
		<img src="<?php echo CHILD_URL; ?>/images/photos/photo18.jpg" alt="">
		<img src="<?php echo CHILD_URL; ?>/images/photos/photo19.jpg" alt="">
		<img src="<?php echo CHILD_URL; ?>/images/photos/photo20.jpg" alt="">
		<img src="<?php echo CHILD_URL; ?>/images/photos/photo21.jpg" alt="">
		<img src="<?php echo CHILD_URL; ?>/images/photos/photo22.jpg" alt="">
		<img src="<?php echo CHILD_URL; ?>/images/photos/photo23.jpg" alt="">
		<img src="<?php echo CHILD_URL; ?>/images/photos/photo24.jpg" alt="">
		<img src="<?php echo CHILD_URL; ?>/images/photos/photo25.jpg" alt="">
		<img src="<?php echo CHILD_URL; ?>/images/photos/photo26.jpg" alt="">
		<img src="<?php echo CHILD_URL; ?>/images/photos/photo27.jpg" alt="">
		<img src="<?php echo CHILD_URL; ?>/images/photos/photo28.jpg" alt="">
		<img src="<?php echo CHILD_URL; ?>/images/photos/photo29.jpg" alt="">
		<img src="<?php echo CHILD_URL; ?>/images/photos/photo30.jpg" alt="">
		<img src="<?php echo CHILD_URL; ?>/images/photos/photo31.jpg" alt="">
		<img src="<?php echo CHILD_URL; ?>/images/photos/photo32.jpg" alt="">

-->
	</div>


<?php }

genesis();
?>