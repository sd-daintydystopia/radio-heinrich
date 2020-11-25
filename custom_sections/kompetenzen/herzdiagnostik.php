<?php 
	$h2 = 'Lorem';
	$h1 = 'Ipsum';
	$h3 = 'Dolor';
	$text_1 = 'laboriosam dolorum aliquid quis praesentium! Temporibus!'; 
	$text_2 = 'ipsum dolor sit amet consectetur adipisicing elit. Ab assumenda';
	$text_3 = 'dicta tempore quibusdam alias non, deleniti sequi';
	$text_main_first = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam consectetur aut esse earum labore perferendis eos, id quas, error commodi hic dolorum rerum, illo vitae nobis sed iusto fugiat assumenda.';
	$termin_sidebar_1 = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam consectetur aut esse earum labore perferendis ';
	$termin_sidebar_2 = 'Lorem ipsum dolor sit amet';
	$termin_sidebar_3 = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi voluptatum quod quae iste, ex, accusamus quisquam magni perspiciatis est architecto suscipit rerum praesentium vel, ullam corporis odio quis quasi aliquam?';
	$termin_phone = '0241 / 123564';
	$person_1 = "images/Fotos/team/person_1.png";
	$person1_title = 'PD Dr. med univ' ;
	$person1_name = 'Heinrich Radio' ;
	$person1_bereich = 'Lorem ipsum dolor sit' ;

?>


<section  id="herzdiagnostik" class="subpage tab-pane fade show active row row-cols-1" role="tabpanel" aria-labelledby="herzdiagnostik-tab">
	<div  class="container col parallax-window kompetenzen-parallax" data-natural-height="350" data-parallax="scroll" data-image-src="images/terminvergabe.png">
	<div class="row " >
			<div class="container col-12">
				<div class="row no-gutters">
					<div class=" container color-overlay-container col-6">

						<div class="kompetenzen-overlay color-overlay">
							<div class="row">
								<div class="container col-4">

									<img src="images/icons/kompetenzen/herzdiagnostik-w.svg" alt="">
									<h2><?php echo $h2; ?></h2>
									<h1><?php echo $h1; ?></h1>
									
								</div>
							</div>
						</div>
					</div>
					<div class="container col-6"></div>
					<!-- <img src="images/parallax/2.jpg" alt=""> -->
				</div>
				<div class="row no-gutters">
					<div class="container bottom-stripe col-12">
						<div class="row">
							<div class="container col-8">
								<b><?php echo $h3 ?></b>
								<div class="row">
									<div class="container col-4">
										<hr>
										<p><?php echo $text_1 ?></p>
									</div>
									<div class="container col-4">
										<hr>
										<p><?php echo $text_2 ?></p>
									</div>
									<div class="container col-4">
										<hr>
										<p><?php echo $text_3 ?></p>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>

				<section class="subpage-tab-content">
					<div class="row no-gutters">
						<div class="container col-8">
							<div class="row">
								<div class="tab-main container col-8">
									<div class="row">
										<div class="container col-12">
											<section>
												<p>
													<?php echo $text_main_first; ?>
												</p>
											</section>
											<section>
												<?php include 'accordion/accordion_herzdiagnostik.php'; ?>

											</section>
											<section>

											</section>
										</div>
									</div>
								</div>
								<div class="sidebar container col-4">
									<div class="row">
										<div class="container col-12">
											<div class="termin-sidebar">
												<p>
													<?php echo $termin_sidebar_1; ?>
												</p>
												<p>
													<?php echo $termin_sidebar_2; ?>
												</p>
												<b>
													<?php echo $termin_phone; ?>
												</b>
												<br>
												<br>
												<p>
													<?php echo $termin_sidebar_3; ?>
												</p>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="container col-12">
											<div class="ansprechpartner_herzdiagnostik">
												<div class="ansprechpartner_img_container">
													<img src="<?php echo $person_1; ?>" alt="">
													<div class="ansprechpartner_text">
														<span>
															<?php echo $person1_title; ?>
														</span>
														<span class="ansprechpartner_name">
															<?php echo $person1_name; ?>
														</span>
														<span>
															<?php echo $person1_bereich; ?>
														</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</section>

			</div>
		</div>	
	</div>

</section>

