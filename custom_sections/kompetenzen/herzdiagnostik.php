<?php 
	$h2 = "HERZDIAGNOSTIK";
	$h1 = 'KARDIO-MRT';
	$h3 = 'VORTEILE DER KARDIO-MRT';
	$text_1 = 'Überlagerungsfreie 3D-Darstellung
des Herzens'; 
	$text_2 = 'Beurteilung der Herzdurchblutung in
Ruhe und unter Belastung';
	$text_3 = 'Keine Strahlenbelastung';
	$text_main_first = 'Die Kernspintomographie des Herzens ist insbesondere zur Abklärung von Funktionsstörungen des Herzens, von Herzrhythmusstörungen oder von Erkrankungen des Herzmuskels, wie zB Entzündungen (Myokarditis) oder Tumoren geeignet. Unterschiedliche Gewebe können mittels MRT präzise hinsichtlich ihres Aufbaus und möglichen Veränderungen untersucht werden. Durch die Möglichkeit das Herz auch in Bewegung abzubilden wird auch die Funktion des Herzens untersucht und Funktionsparameter wie
Herzgröße und Pumpleistung können bestimmt werden. Aus diesen Gründen eignet sich die MRT insbesondere zur Untersuchung der folgenden
Teilbereiche des Herzens beziehungsweise bei folgenden Fragen:';
	$ablauf_header ='Ablauf'; 
	$ablauf_text1 = 'Eine MRT-Untersuchung erfolgt nicht-invasiv (also „von außen“) und ohne Strahlenbelastung, wie sie zB beim Röntgen auftritt.';
	$ablauf_text2 = 'Während er Untersuchung ist zusätzlich das Anlegen eines EKGs (Elektrokardiogramm) wichtig. Es unterstützt bei der Berechnung der Schnittbilder vom Herzen. Je nach Fragestellung kann es zudem nötig sein, dass Sie während der Untersuchung
    Kontrastmittel und/oder bestimmte Medikamente über einen venösen Zugang erhalten. Um die Bilder möglichst ohne störende Zusatzbewegungen aufzeichnen zu können, werden Sie während der Untersuchung mehrfach gebeten, den Atem anzuhalten, solange dies Ihnen möglich ist.';
	$ablauf_text3 = 'Natürlich stehen wir während der gesamten Untersuchung mit Ihnen in Kontakt und Sie natürlich auch mit uns. Ein Arzt betreut die Untersuchung, wertet die Bilder aus und bespricht die Ergebnisse im Anschluss mit Ihnen.';
	$dauer_header ='Dauer der Untersuchung'; 
	$dauer_text1 = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus facilis nobis architecto, numquam deserunt delectus doloremque amet omnis voluptates aspernatur, rem beatae nemo officiis a asperiores facere et dolorum quam?Lorem ipsum dolor sit amet consectetur adipisicing elit.';
	$dauer_text2 = 'Accusamus facilis nobis architecto, numquam deserunt delectus doloremque amet omnis voluptates aspernatur, rem beatae nemo officiis a asperiores facere et dolorum quam?Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus facilis nobis architecto, numquam deserunt delectus doloremque amet omnis voluptates aspernatur, rem beatae nemo officiis a asperiores facere et dolorum quam?';
	$dauer_text3 = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum dicta quisquam incidunt corrupti doloremque, autem nulla ipsam consectetur modi dolores odit vero error cupiditate exercitationem quam aperiam impedit iste explicabo?';
	$dauer_text4 = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum dicta quisquam incidunt corrupti doloremque, autem nulla ipsam consectetur modi dolores odit vero error cupiditate exercitationem quam aperiam impedit iste explicabo?';

	$termin_sidebar_1 = 'Möchten Sie einen Termin für eine MRT Untersuchung des Herzens vereinbaren oder haben Sie weitere Fragen hierzu?';
	$termin_sidebar_2 = 'Rufen Sie uns gerne an:';
	$termin_sidebar_3 = 'Zur Klärung wichtiger Fragen vor der Untersuchung können Termine nur telefonisch und nicht online vereinbart werden.';
	$termin_phone = '0241 . 94695-0';
	$doc_1 = "images/Fotos/team/thickethier.jpg";
	$doc1_title = 'PD Dr. med. univ' ;
	$doc1_name = 'TILMAN HICKETHIER' ;
	$doc1_bereich = 'Facharzt für Radiologie';
	$doc_2 = "images/Fotos/team/kmruhl.jpg";
	$doc2_title = 'Dr. med.' ;
	$doc2_name = 'KARL M. RUHL' ;
	$doc2_bereich = 'Facharzt für Radiologie';
?>





<section id="herzdiagnostik" class="subpage tab-pane fade show active row row-cols-1" role="tabpanel" aria-labelledby="herzdiagnostik-tab">
	<div class="container col parallax-window kompetenzen-parallax" data-natural-height="350" data-parallax="scroll" data-image-src="images/terminvergabe.png">
		<div class="row ">
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
											<section class="text_main_first">
												<p>
													<?php echo $text_main_first; ?>
												</p>
											
												<?php include 'accordion/accordion_herzdiagnostik.php'; ?>
												
											</section>

											<section class="text_main_second">
												<h3><?php echo $ablauf_header;?></h3>
												<p><?php echo $ablauf_text1;?></p>
												<br>
												<p><?php echo $ablauf_text2;?></p>
												<br>
												<p><?php echo $ablauf_text3;?></p>
											</section>

											<section class="text_main_third">
												<h3><?php echo $dauer_header;?></h3>
												<section class="dauer_boxes">
													<div class="row">
														<div class="container col-4">
															<div class="dauer_boxes_content">
																<img src="images/icons/kompetenzen/uhr_1.png" alt="">
																<div class="bottom_text">
                                                                    <h3>Vorbereitung</h3>
	
																</div>
															</div>
														</div>
														<div class="container col-4">
															<div class="dauer_boxes_content">
																<img src="images/icons/kompetenzen/uhr_2.png" alt="">
																<div class="bottom_text">
																	
																</div>
															</div>
														</div>
														<div class="container col-4">
															<div class="dauer_boxes_content">
																<img src="images/icons/zeiten/0min.png" alt="">
																<div class="bottom_text">
																	
																</div>
															</div>
														</div>
													</div>
												</section>
												<p><?php echo $dauer_text1;?></p>
												<br>
												<p><?php echo $dauer_text2;?></p>
												<br>
												<p><?php echo $dauer_text3;?></p>
												<br>
												<p><?php echo $dauer_text4;?></p>
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
												<a href="tel:+49241946950">
													<b><?php echo $termin_phone; ?></b>
												</a>
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
													<img src="<?php echo $doc_1; ?>" alt="">
													<div class="ansprechpartner_text">
														<span>
															<?php echo $doc1_title; ?>
														</span>
														<span class="ansprechpartner_name">
															<?php echo $doc1_name; ?>
														</span>
														<span>
															<?php echo $doc1_bereich; ?>
														</span>
													</div>
												</div>
												<div class="ansprechpartner_img_container">
													<img src="<?php echo $doc_2; ?>" alt="">
													<div class="ansprechpartner_text">
														<span>
															<?php echo $doc2_title; ?>
														</span>
														<span class="ansprechpartner_name">
															<?php echo $doc2_name; ?>
														</span>
														<span>
															<?php echo $doc2_bereich; ?>
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
					<section class="content_full_width">
						<div class="row bg-grey voruntersuchung">
							<div class="container col-12">
								<div class="row">
									<div class="container col-8">
										<div class="row">
											<div class="container col-8">
												<div class="row">
													<div class="container col-6">
														<div class="voruntersuchung_container">
															bla 
														</div>	
													</div>
													<div class="container col-6">
														<div class="voruntersuchung_container">
															bla 
														</div>
													</div>
												</div>
											</div>
											<div class="container col-4">

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="container col-12">
								<div class="row">
									<div class="container col-8">
										<div class="row">
											<div class="container col-8">
												<div class="row">
													<div class="container col-6">
														bla 
													</div>
													<div class="container col-6">
														bla
													</div>

												</div>
											</div>
											<div class="container col-4">

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</section>
			</div>
		</div>
	</div>
</section>
