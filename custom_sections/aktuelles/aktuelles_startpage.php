<?php 


?>
<section  class="row aktuelles_startpage">
	<div class="color_overlay"></div>
	<div class="container col-8">
		<div class="margin_top_bottom row container">
			<div class="container col-12">
				<div class="row">

					<div class=" col-6">
						<div class="slider-fixed-half">
							<h1 id="fixed-h1">
								AKTUELLES
							</h1>
						</div>	
					</div>
					<div class=" col-6">
						<div id="oc-slider"class="row owl-carousel carousel-widget owl-loaded owl-drag with-carousel-dots">
							<!-- 
								next element is div.slide data-thumb="data/directory/of/image.jpg" 

								the included files reside in  radio-heinrich/custom-sections/aktuelles/posts/*.html
							-->

								
								<?php foreach (glob("custom_sections/aktuelles/posts/*.html") as $filename)
									{
										include $filename;
									}
								?>

						</div>
					</div>
				</div>

			</div>
		</div>
		
	</div>
</section>
<!-- <script src="custom_sections/aktuelles/aktuelles.js"></script> -->