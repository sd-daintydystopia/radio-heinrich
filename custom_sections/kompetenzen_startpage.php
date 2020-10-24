<?php
	$h1 = 'Kompetenzen';
	$h2 = 'Unsere';
	$kompetenzen = [
						"1" => "Bewegungsapparat",
						"2" => "Prostatadiagnostik",
						"3" => "Herzdiagnostik",
						"4" => "Brustdiagnositk",
						"5" => "Neuroradiologie",
						"6" => "Turmordiagnostik",
						"7" => "Schmerz- und Strahlentherapie",
						"8" => "Brustdiagnostik",
					];
	$kompetenzen_untertitel =  [
									"1" => "(MRT)",
									"2" => "(MRT)",
									"3" => "Szintigraphie",
								];
?>

<section class="kompetenzen-startpage  row">
	<div class="container col-8  clearfix">
		<h2><?php echo $h2; ?></h2>
		<h1><?php echo $h1; ?></h1>
		<div class="row">

				
			<div class="kompetenzen-component-container col-sm-12 col-lg-3">
				<div class="feature-box fbox-rounded fbox-effect">
					<div class="kompetenzen-background-img img_1"></div>
					<div class="bottom-link">
						<?php echo $kompetenzen["1"]; ?>
					</div>
				</div>
			</div>
			
			<div class="kompetenzen-component-container col-sm-12 col-lg-3">
				<div class="feature-box fbox-rounded fbox-effect">
					<div class="kompetenzen-background-img img_2"></div>
					<div class="bottom-link">
						<?php echo $kompetenzen["2"]; ?>
						<br>
						<span class="untertitel"><?php echo $kompetenzen_untertitel["1"]; ?></span>
					</div>
				</div>
			</div>
			
			<div class="kompetenzen-component-container col-sm-12 col-lg-3">
				<div class="feature-box fbox-rounded fbox-effect">
					<div class="kompetenzen-background-img img_3"></div>
					<div class="bottom-link">
						<?php echo $kompetenzen["3"]; ?>
						<br>
						<span class="untertitel"><?php echo $kompetenzen_untertitel["2"]; ?></span>
					</div>
				</div>
			</div>
			
			<div class="kompetenzen-component-container col-sm-12 col-lg-3">
				<div class="feature-box fbox-rounded fbox-effect">
					<div class="kompetenzen-background-img img_4"></div>
					<div class="bottom-link">
						<?php echo $kompetenzen["4"]; ?>
					</div>
				</div>
			</div>
			
			<div class="kompetenzen-component-container col-sm-12 col-lg-3">
				<div class="feature-box fbox-rounded fbox-effect">
					<div class="kompetenzen-background-img img_5"></div>
					<div class="bottom-link">
						<?php echo $kompetenzen["5"]; ?>
					</div>
				</div>
			</div>
		
			<div class="kompetenzen-component-container col-sm-12 col-lg-3">
				<div class="feature-box fbox-rounded fbox-effect">
					<div class="kompetenzen-background-img img_6">
					</div>
					<div class="bottom-link">
						<?php echo $kompetenzen["6"]; ?>
					</div>
				</div>
			</div>
			
			<div class="kompetenzen-component-container col-sm-12 col-lg-3">
				<div class="feature-box fbox-rounded fbox-effect">
					<div class="kompetenzen-background-img img_7"></div>
					<div class="bottom-link">
						<?php echo $kompetenzen["7"]; ?>
					</div>
				</div>
			</div>
			
			<div class="kompetenzen-component-container col-sm-12 col-lg-3">
				<div class="feature-box fbox-rounded fbox-effect">
					<div class="kompetenzen-background-img img_8"></div>
					<div class="bottom-link">
						<?php echo $kompetenzen["8"]; ?>
						<br>
						<span class="untertitel"><?php echo $kompetenzen_untertitel["3"]; ?></span>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section>