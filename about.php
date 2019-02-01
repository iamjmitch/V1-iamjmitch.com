<?php
/*
 * Template Name: about
 */?>
<style>
	.link-about {
		color: #fb2e01!important;
	}
</style>
 <?php

get_header ();?>

<?php while(have_posts()) {
	the_post(); ?>


<div id="page-container">
	

<h1><?php the_title(); ?></h1>
<div id="avatar">
<img src="https://storage.googleapis.com/iamjmitch/iamjmitch/avatar.png">
</div>
 <?php the_content(); ?> 
 



</div>

<?php }
	get_footer();
		?>

