<?php 
	$h1 = "Willkommen";
	$h2 = "Herzlich";
	$h3 = "Ihre Radiologie in Aachen";
	$text_block1 = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam doloribus consequuntur modi, consequatur iste ex! Exercitationem unde magni vero vitae nulla qui magnam nesciunt animi, dolores inventore, quasi possimus id";
	$text_block2 = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum alias quo repellendus neque nesciunt incidunt quam? Nulla sequi reiciendis, suscipit perferendis, neque ea dolore earum corrupti saepe vel, porro reprehenderit!
	Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis in vel qui illo quam autem ullam reiciendis impedit saepe optio, quae sapiente ex quas nulla pariatur repudiandae nemo reprehenderit sint!";

?>

<section class="welcome-startpage row no-gutters">
	<div class="container col-8">
		<div class="welcome-subcontainer row">
			<div class="container col-6 welcome-container-text">
				<h2><?php echo $h2; ?></h2>
				<h1><?php echo $h1; ?></h1>
				<p><?php echo $text_block1; ?></p>
				<h3><?php echo $h3; ?></h3>
				<p><?php echo $text_block2; ?></p>
				<span class="bottom-link">
					<a href="#">lernen sie uns kennen ></a>
				</span>
			</div>
			<div class="col-6 welcome-container-image">
				<img src="https://placekeanu.com/500/400" alt="">
			</div>
		</div>
	</div>
</section>