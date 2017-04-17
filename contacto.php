<!DOCTYPE html>
<html lang="es">
	<head>
		<?php include('site/head.php'); ?>
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
								<h4 class="subsection_title">Contacto</h4>
								<table class="contact-info">
									<tr valign="middle">
										<td class="icon">
											<figure>
												<img src="img/icon-whatsapp.png" >
											</figure>
										</td>
										<td class="text" style="border-right: 1px solid #ccc;">
											<p>11 5837 9788</p>
										</td>
										<td class="icon">
											<figure>
												<img src="img/icon-phone.png" >
											</figure>
										</td>
										<td class="text" style="border-right: 1px solid #ccc;">
											<p>11 2090 8805</p>
										</td>
										<td class="icon">
											<figure>
												<img src="img/icon-mail.png" >
											</figure>
										</td>
										<td class="text">
											<p>secretaria@aztlan.org.ar</p>
										</td>
									</tr>
								</table>
								<div style="margin: 15px 30px 20px 30px; border-top: 1px solid #ccc;"></div>
								<form class="contacto" action="contact.php" method="post">
									<h4>Complet&aacute; tus datos</h4>
									<fieldset>
										<input name="nombre" placeholder="Nombre y Apellido" type="text" tabindex="1" required autofocus />
									</fieldset>
									<fieldset>
										<input name="email" placeholder="Email" type="email" tabindex="2" required />
									</fieldset>
									<fieldset>
										<input name="cel" placeholder="Celular" type="tel" tabindex="3" required />
									</fieldset>
									<fieldset>
										<input name="dni" placeholder="DNI" type="tel" tabindex="4" required />
									</fieldset>
									<fieldset>
										<input name="facebook" placeholder="Facebook" type="text" tabindex="5" required />
									</fieldset>
									<fieldset>
										<textarea name="comentario" placeholder="Escribe tu mensaje..." rows="5" tabindex="6" required></textarea>
									</fieldset>
									<fieldset>
										<button name="submit" type="submit" id="contact-submit" data-submit="...Enviando">Enviar</button>
									</fieldset>
								</form>
							</div>
							<div class="col-md-3 side_section">
								<?php include('site/events.php'); ?>
							</div>
						</div>
					</div>
				</section>
				<!-- Sección principal > final -->
			</section>
			<?php include('site/footer.php'); ?>
			
		</div>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</body>
</html>