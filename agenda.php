<!DOCTYPE html>
<html lang="es">
	<head>
		<link rel="stylesheet" type="text/css" href="css/components.min.css" />
		<?php include('site/head.php'); ?>
		<script src="js/main.js"></script>
		<style type="text/css">
			#screenshot{
				position:absolute;
				border:1px solid #ccc;
				background:#333;
				padding:5px;
				display:none;
				color:#fff;
			}
			.table-scrollable{
				font-size: 14px!important;
			}
			.table-scrollablea,.table-scrollable a:link,.table-scrollable a:visited,.table-scrollable a:hover,.table-scrollable a:focus {
			color: #ff8b1e;
			}
			.table-scrollablea a:hover {
			text-decoration: underline;
			}
			.table th{
				max-width: 90px;
				width: 90px;
			}
			.table td{
				max-width: 90px;
				width: 90px;
			}
			.table td, .table th {
			font-size: 12px;
			}
			.thead>tr>th:first-child {
			max-width: 70px;
				width: 70px;
			}
			thead{
				background-color: orange;
			color: white;
			}
			@media (max-width: 600px) {
				#container #content_section .main_section {
				padding: 0px 0em!important;
				}
			}
		</style>
	</head>
	<body>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.8";
		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<div id="container" style="background-color: #fff;">
			<?php include('site/header.php'); ?>
			<section id="content_section">
				<!-- Sección principal > comienzo -->
				<section class="main_section">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-9">
								<h4 class="subsection_title" style="margin: 0px 0px 0.5em 0px;">Agenda semanal<br>
								</h4>
								<img class="article_image img-responsive" src="img/articles_miniatures/agenda.jpg">
								<div style="margin-bottom:30px;" class="subagenda"> Si no podés asistir a una charla, solicitá tu <a href="http://www.aztlan.org.ar/pages/psi/?c=1065/30/7">Entrevista Personalizada</a></div>
								
								<hr>
								<div class="table-scrollable">
									<table class="table table-striped table-bordered table-hover">
										<thead>
											<tr>
												<th scope="col" style="width:70px!important">  </th>
												<th scope="col"> Lunes </th>
												<th scope="col"> Martes </th>
												<th scope="col"> Miércoles </th>
												<th scope="col"> Jueves </th>
												<th scope="col"> Viernes </th>
												<th scope="col"> Sábado </th>
												<th scope="col"> Domingo </th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td> 10:30 hs </td>
												<!-- LUNES -->
												<td>
													<div style="margin-top:5px;">
														<a class="screenshot" href="http://www.aztlan.org.ar/pages/psi/?c=1264/3/7"  rel="http://www.centroastrologico.com.ar/images/eventos/agenda/agenda_astro_lunes_1030.jpg">
															<strong>CHARLA</strong>
															<br>CLAVES ASTROLÓGICAS PARA ALCANZAR EL ÉXITO
														</a>
													</div>
												</td>
												<!-- MARTES -->
												<td>
													<div style="margin-top:5px;">
														<a class="screenshot" href="http://www.aztlan.org.ar/pages/psi/?c=1266/3/7"  rel="http://www.centroastrologico.com.ar/images/eventos/agenda/agenda_astro_martes_1030.jpg">
															<strong>CHARLA</strong>
															<br>PSICO-ASTROLOGÍA: Descubrí tu Verdadera Naturaleza y Vocación
														</a>
													</div>
												</td>
												<!-- MIÉRCOLES -->
												<td>
													<div style="margin-top:5px;">
														<a class="screenshot" href="http://www.aztlan.org.ar/pages/psi/?c=1268/3/7"  rel="http://www.centroastrologico.com.ar/images/eventos/agenda/agenda_astro_miercoles_1030.jpg">
															<strong>CHARLA</strong>
															<br>ASTROLOGÍA PSICOLÓGICA: Descubrí los Secretos de tu Carta Natal
														</a>
													</div>
												</td>
												<!-- JUEVES -->
												<td>
													<div style="margin-top:5px;">
														<a class="screenshot" href="http://www.aztlan.org.ar/pages/psi/?c=1270/3/7"  rel="http://www.centroastrologico.com.ar/images/eventos/agenda/agenda_astro_jueves_1030.jpg">
															<strong>CHARLA</strong>
															<br>Aprendé Astrología: Conectate con tu destino y sé Vos Misma
														</a>
													</div>
												</td>
												<!-- VIERNES -->
												<td>  </td>
												<!-- SÁBADO -->
												<td>  </td>
												<!-- DOMINGO -->
												<td>  </td>
											</tr>
											<tr>
												<td> 14:30 hs </td>
												<!-- LUNES -->
												<td> </td>
												<!-- MARTES -->
												<td> </td>
												<!-- MIÉRCOLES -->
												<td> </td>
												<!-- JUEVES -->
												<td> </td>
												<!-- VIERNES -->
												<td> </td>
												<!-- SÁBADO -->
												<td> </td>
												<!-- DOMINGO -->
												<td></td>
											</tr>
											<tr>
												<td> 16:30 hs </td>
												<!-- LUNES -->
												<td> </td>
												<!-- MARTES -->
												<td> </td>
												<!-- MIÉRCOLES -->
												<td> </td>
												<!-- JUEVES -->
												<td> </td>
												<!-- VIERNES -->
												<td> </td>
												<!-- SÁBADO -->
												<td> </td>
												<!-- DOMINGO -->
												<td></td>
											</tr>
											<tr>
												<td> 18:30 hs </td>
												<!-- LUNES -->
												<td> </td>
												<!-- MARTES -->
												<td> </td>
												<!-- MIÉRCOLES -->
												<td> </td>
												<!-- JUEVES -->
												<td> </td>
												<!-- VIERNES -->
												<td> </td>
												<!-- SÁBADO -->
												<td> </td>
												<!-- DOMINGO -->
												<td></td>
											</tr>
											<tr>
												<td> 19:00 hs </td>
												<!-- LUNES -->
												<td>
													<div style="margin-top:5px;">
														<a class="screenshot" href="http://www.aztlan.org.ar/pages/psi/?c=1265/3/7"  rel="http://www.centroastrologico.com.ar/images/eventos/agenda/agenda_astro_lunes_19.jpg">
															<strong>CHARLA</strong>
															<br>SENTÍ, PENSÁ Y ACTUÁ EN ARMONÍA CON TU ESENCIA
														</a>
													</div>
												</td>
												<!-- MARTES -->
												<td>
													<div style="margin-top:5px;">
														<a class="screenshot" href="http://www.aztlan.org.ar/pages/psi/?c=1267/3/7"  rel="http://www.centroastrologico.com.ar/images/eventos/agenda/agenda_astro_martes_19.jpg">
															<strong>CHARLA</strong>
															<br>PSICO-ASTROLOGÍA: Aprendé cómo mejorar tus relaciones Conociendo tu Carta Natal
														</a>
													</div>
												</td>
												<!-- MIÉRCOLES -->
												<td>
													<div style="margin-top:5px;">
														<a class="screenshot" href="http://www.aztlan.org.ar/pages/psi/?c=1269/3/7"  rel="http://www.centroastrologico.com.ar/images/eventos/agenda/agenda_astro_miercoles_19.jpg">
															<strong>CHARLA</strong>
															<br>PSICO-ASTROLOGÍA: Conocé tu Esencia Única
														</a>
													</div>
												</td>
												<!-- JUEVES -->
												<td>
													<div style="margin-top:5px;">
														<a class="screenshot" href="http://www.aztlan.org.ar/pages/psi/?c=1271/3/6"  rel="http://www.centroastrologico.com.ar/images/eventos/agenda/agenda_astro_jueves_19.jpg">
															<strong>CHARLA</strong>
															<br>PSICO-ASTROLOGÍA: Venus: El Planeta del Amor. &quest;Qué vínculos afectivos son mejores para mí&iquest;
														</a>
													</div>
												</td>
												<!-- VIERNES -->
												<td>
													<!--div style="margin-top:5px;"><a class="screenshot" href=""  rel="http://www.centroastrologico.com.ar/images/eventos/agenda/notables.jpg"><strong>CineClub</strong><br>
													Encuentro con Hombres Notables</a></div -->
												</td>
												<!-- SÁBADO -->
												<td>  </td>
												<!-- DOMINGO -->
												<td>
													<div style="margin-top:5px;">
														<a class="screenshot" href="http://www.aztlan.org.ar/pages/psi/?c=1276/3/7"  rel="http://www.centroastrologico.com.ar/images/eventos/agenda/agenda_astro_domingo_19.jpg">
															<strong>CHARLA</strong>
															<br>Sent&iacute;, Pens&aacute; y Actu&aacute; en Armon&iacute;a con tu Esencia
														</a>
													</div>
												</td>
											</tr>
											<tr>
												<td> 19:30 hs </td>
												<!-- LUNES -->
												<td> </td>
												<!-- MARTES -->
												<td> </td>
												<!-- MIÉRCOLES -->
												<td> </td>
												<!-- JUEVES -->
												<td> </td>
												<!-- VIERNES -->
												<td> </td>
												<!-- SÁBADO -->
												<td> </td>
												<!-- DOMINGO -->
												<td></td>
											</tr>
										</tbody>
									</table>
									
								</div>
							</div>
							<div class="col-md-3 side_section">
								<ul class="destacados">
									<div class="title">ARTÍCULOS DESTACADOS</div>
									<a href="article.php?article=destino-o-libre-albedrio"><li>
										<p>¿Destino o Libre Albedrío?</p>
									</li></a>
									<a href="article.php?article=que-es-el-signo-ascendente"><li><p>¿Qué es el Ascendente?</p></li></a>
									<a href="article.php?article=planetas-retrogrados"><li><p>¿Qué pasa si tengo muchos retrógrados en<br />mi carta natal?</p></li></a>
									<a href="article.php?article=que-son-los-transitos"><li><p>¿Qué son los tránsitos?</p></li></a>
									<a href="article.php?article=arquetipos-y-la-astrologia"><li><p>Arquetipos y Astrología</p></li></a>
									<a href="article.php?article=ascendente-cancer-en-la-revolucion-solar"><li><p>Ascendente Cáncer en la Revolución<br />Solar</p></li></a>
								</ul>
							</div>
						</div>
					</div>
				</section>
			</section>
			<?php include('site/footer.php'); ?>
			
		</div>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		
	</body>
</html>