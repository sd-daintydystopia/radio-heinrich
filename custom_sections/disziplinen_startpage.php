<?php
	$h1 = 'Disziplinen';
	$h2 = 'Unsere';
	$text = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum eveniet at quos velit dolores.
	 Illum nihil qui quaerat soluta voluptate magnam, sint sit nisi praesentium voluptas? Dolorum voluptatem vero dolorem?";
	$disziplinen = [
					"1" => "Radiologie",
					"2" => "Nuklearmedizin",
					"3" => "Strahlentherapie",
				];
	$text_block_1 = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad vero aperiam perferendis, architecto odit maiores ipsum minima culpa labore quo. Aut quam debitis fugit qui vero dolor velit in atque.";
	$text_block_2 = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic temporibus consequatur saepe molestiae corporis nesciunt rem voluptate est earum sit debitis rerum cumque, dicta, officiis veritatis, pariatur sunt consequuntur voluptatem!";
	$text_block_3 = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur quibusdam architecto cum sunt maiores voluptatem est magnam molestias officiis quod repudiandae quidem dolor assumenda cumque ab veniam nihil, voluptas nisi?";
?>

<section class="margin_top_bottom disziplinen-startpage row">
	<div class="container col-8 ">

		<h2><?php echo $h2; ?></h2>
		<h1><?php echo $h1; ?></h1>

		<div class="row">
			<div class="text col-12">
				<p><?php echo $text; ?></p>
				
			</div>
		</div>

		<div class="row">

			<div class=" col-4 ">
				<div class=" disziplinen-container-startpage">

					<div class="icon-container">
						<img src="images/icons/disziplinen/radiologie.svg" alt="">
					</div>
					<h4>
						<?php echo $disziplinen["2"]; ?>
					</h4>
					<p><?php echo $text_block_1; ?></p>
					<div class="bottom-link">
						<a href="">Weiterlesen</a>
					</div>
				</div>
			</div>

			<div class=" col-4 ">
				<div class="disziplinen-container-startpage">
					<div class="icon-container">
						<img src="images/icons/disziplinen/nuklearmedizin.svg" alt="">
					</div>	
					<h4>
						<?php echo $disziplinen["1"]; ?>
					</h4>
					<p><?php echo $text_block_2; ?></p>
					<div class="bottom-link">
						<a href="">Weiterlesen</a>
					</div>
				</div>
			</div>

			<div class=" col-4 ">
				<div class="disziplinen-container-startpage">
					<div class="icon-container">
						<img src="images/icons/disziplinen/strahlentherapie.svg" alt="">
					</div>	
					<h4>
						<?php echo $disziplinen["3"]; ?>
					</h4>
					<p><?php echo $text_block_3; ?></p>
					<div class="bottom-link">
						<a href="">Weiterlesen</a>
					</div>
				</div>
			</div>

		</div>
	</div>	
</section>