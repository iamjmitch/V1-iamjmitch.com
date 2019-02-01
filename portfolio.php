<?php
/*
 * Template Name: portfolio
 */?>
<style>
	.link-websites {
		color: #fb2e01!important;
	}
</style>
 <?php

get_header ();?>

<?php while(have_posts()) {
	the_post(); ?>


<div id="page-container">
	

<h1><?php the_title(); ?></h1>
<div id="portfolio-container">

	<div class="portfoliowrap">
	<div class="portfolio-header">

	<div class="portfolio-image-container">
		<a href="https://salscupcakes.iamjmitch.com" target="_blank" class="portfolio-image"> <img src="https://storage.googleapis.com/iamjmitch/iamjmitch/salscupcakes.png"></a>
	</div>
	<div class="portfolio-text">
		<a href="https://salscupcakes.iamjmitch.com" target="_blank" ><h3>salscupcakes.iamjmitch.com</h3></a>
		<ul>
			<li>Type: Personal Education</li>
			<li>Responsive Layout: Yes</li>
			<li>WooCommerce</li>
			<li>HTML/CSS Template From Scratch</li>
			<li>Wireframe-to-Design</li>
			<li>JS library used to operate image slideshows</li>
		</ul>
		</div>
	</div>
		<div class="portfolio-info">

			<h4>About the project:</h4>
		<p><b>Still in development</b><br>A Website in development used as a platform to learn PHP/Woocommerce/Javascript.<br>
			This website is fully functional with the exception of shopping cart checkout as it has been disabled. The website is mobile responsive and uses javascript image slideshows. <br><br>
			<b>This website is for education purposes only, all images remain the property of their respective owners and used under fair use.</b> </p>
			
			
</div>

</div>


<div class="portfoliowrap">
	<div class="portfolio-header">

	<div class="portfolio-image-container">
		<a href="https://summerescapes.iamjmitch.com" target="_blank" class="portfolio-image"> <img src="https://storage.googleapis.com/iamjmitch/iamjmitch/summerescapes.png"></a>
	</div>
	<div class="portfolio-text">
		<a href="https://summerescapes.iamjmitch.com" target="_blank" ><h3>summerescapes.com.au</h3></a>
		<ul>
			<li>Type: Project/Education</li>
			<li>Responsive Layout: Yes</li>
			<li>Static Wesbite</li>
			<li>HTML/CSS From Scratch & Bootstrap 4</li>
			<li>Wireframe-to-Design</li>
		</ul>
		</div>
	</div>
		<div class="portfolio-info">

			<h4>About the project:</h4>
		<p>An assignment as part of the assessment to complete a Diploma in Web Design from Tafe Queensland.
			The website features more advanced HTML/CSS along with being completely mobile responsive using flexbox. The website features a homepage hero image and navbar whose CSS changes Depending on what page the user is currently viewing. It also features mobile specific features and depending on the users viewing device, either adds or removes content. Links to individual location pages was not required for this assessment </p>
			<h4>Assignment Mark:</h4>
			<p>Pass - 100% </p>
			
</div>

</div>

<div class="portfoliowrap">
	<div class="portfolio-header">

	<div class="portfolio-image-container">
		<a href="https://naomieldred.com" target="_blank" class="portfolio-image"> <img src="https://storage.googleapis.com/iamjmitch/iamjmitch/naomieldredmakeupdotcom.png"></a>
	</div>
	<div class="portfolio-text">
		<a href="https://naomieldred.com" target="_blank" ><h3>naomieldred.com</h3></a>
		<ul>
			<li>Type: Commercial</li>
			<li>Responsive Layout: Yes</li>
			<li>Wordpress</li>
			<li>Template made from scratch</li>
			<li>All images served from a global CDN</li>
			<li>SSL Ecryption</li>
		</ul>
		</div>
	</div>
		<div class="portfolio-info">

			<h4>About the project:</h4>
		<p>A commercial website for a local makeup artist. Works completed within the full specifications set by the client. Website uses a mixture of wordpress controlled elements such as feature images and text as well as set designs coded into different page templates  </p>
			<h4>What the client had to say:</h4>
			<p><i>"I couldn’t be happier with my fresh new website! James created a site that I truly love and had envisioned, which was so important for me. It’s something that I can say really suits me and my business perfectly. He was professional yet super friendly, and not to mention - so patient and understanding with me too! <br><br>
I really can’t recommend and thank James enough!"</i> - Naomi Eldred</p>
</div>

</div>

<div class="portfoliowrap">
	<div class="portfolio-header">

		<div class="portfolio-image-container">

	
		<a href="https://theartisthouse.iamjmitch.com" target="_blank" class="portfolio-image"> <img src="https://storage.googleapis.com/iamjmitch/iamjmitch/theartisthouse.png"></a>
	</div>
	<div class="portfolio-text">
		<a href="https://theartisthouse.iamjmitch.com" target="_blank"> <h3>theartisthouse.com.au</h3> </a>
		<ul>
			<li>Type: Project/Education</li>
			<li>Responsive Layout: No / Not Required</li>
			<li>Static Website</li>
			<li>Basic HTML & CSS from scratch</li>
		</ul>
		</div>
	</div>
		<div class="portfolio-info">
		<h4>About the project:</h4>
		<p>An assignment as part of the assessment to complete a Certificate IV in Web Design from Tafe Queensland.
			While a very basic design in terms of layout and overall appearance, the website was designed to fit within the assessment requirements for size, layout & colour.</p>
			<h4>Assignment Mark:</h4>
			<p>Pass - 100% </p>	
</div>

</div>

<div class="portfoliowrap">
	<div class="portfolio-header">

	<div class="portfolio-image-container">
		<a href="/" target="_blank" class="portfolio-image"> <img src="https://storage.googleapis.com/iamjmitch/iamjmitch/iamjmitch.png"></a>
	</div>
	<div class="portfolio-text">
		<a href="/" target="_blank"><h3>iamjmitch.com</h3></a>
		<ul>
			<li>Type: Portfolio</li>
			<li>Responsive Layout: Yes</li>
			<li>Wordpress</li>
			<li>Template made from scratch</li>
			<li>All images served from a global CDN</li>
			<li>SSL Ecryption</li>
		</ul>
		</div>
	</div>
		<div class="portfolio-info">
			<h4>About the project:</h4>
		<p>Portfolio website to showcase James Mitchell's Work. Website uses a mixture of wordpress controlled elements such as feature images and text as well as set designs coded into different page templates.</p>
		
</div>

</div>


 <?php the_content(); ?> 
 </div>


</div>


<?php }
	get_footer();
		?>

