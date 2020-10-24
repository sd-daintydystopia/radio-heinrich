<?php 
 $h1 = 'Impressionen';
 $h2 = 'Praxis';
 $img_src1 = 'https://via.placeholder.com/250x150/006373/fff';
 $img_src2 = 'https://via.placeholder.com/250x150/A0CB83/fff';
 $img_src3 = 'https://via.placeholder.com/350x150/F2E75E/fff';
?>
<section class="row  praxis_impressionen">
	<div class="container col-8">
		<div class="row row-cols-lg-1 row-cols-sm-1">
			<div class="col">
				<h2>
					<?php echo $h2; ?>    
				</h2>
				<h1>
					<?php echo $h1; ?>    
				</h1>
			</div>
		</div>
	</div>
	<div class="margin-top-bottom container col-12">
		<div id="oc-slider-2" class="row owl-carousel carousel-widget owl-loaded owl-drag with-carousel-dots">
			<div class="item"><img style="width:250px"  src="<?php echo $img_src1; ?>" alt="" class="impressionen-img"></div>
			<div class="item"><img style="width:250px" src="<?php echo $img_src2; ?>" alt="" class="impressionen-img"></div>
			<div class="item"><img style="width:350px" src="<?php echo $img_src3; ?>" alt="" class="impressionen-img"></div>
			<div class="item"><img style="width:250px" src="<?php echo $img_src1; ?>" alt="" class="impressionen-img"></div>
			<div class="item"><img style="width:250px" src="<?php echo $img_src2; ?>" alt="" class="impressionen-img"></div>
			<div class="item"><img style="width:350px" src="<?php echo $img_src3; ?>" alt="" class="impressionen-img"></div>
			<div class="item"><img style="width:250px" src="<?php echo $img_src1; ?>" alt="" class="impressionen-img"></div>
			<div class="item"><img style="width:250px" src="<?php echo $img_src2; ?>" alt="" class="impressionen-img"></div>
			<div class="item"><img style="width:350px" src="<?php echo $img_src3; ?>" alt="" class="impressionen-img"></div>
			<div class="item"><img style="width:250px" src="<?php echo $img_src1; ?>" alt="" class="impressionen-img"></div>
			<div class="item"><img style="width:250px" src="<?php echo $img_src2; ?>" alt="" class="impressionen-img"></div>
			<div class="item"><img style="width:350px" src="<?php echo $img_src3; ?>" alt="" class="impressionen-img"></div>
		</div>
	</div>
	
</section>