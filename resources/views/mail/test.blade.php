<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="x-apple-disable-message-reformatting">
	<title></title>
	<!--[if mso]>
	<noscript>
		<xml>
			<o:OfficeDocumentSettings>
				<o:PixelsPerInch>96</o:PixelsPerInch>
			</o:OfficeDocumentSettings>
		</xml>
	</noscript>
	<![endif]-->
	<style>
		table, td, div, h1, p {font-family: Arial, Helvetica, sans-serif;}
	</style>
</head>
<body style="margin:0;padding:0;">
	<table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
		<tr>
			<td align="center" style="padding:0;">
				<table role="presentation" style="width:602px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">
					<tr>
						<td align="center" style="">
							<img src="{{ asset('img/mail/portada-mail.png') }}" alt="" width="600" style="height:auto;display:block;" />
						</td>
					</tr>
					<tr>
						<td style="padding:36px 30px 42px 30px;">
							<table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
								<tr>
									<td style="padding:0 0 36px 0;color:#153643;">
										<h1 style="font-size:26px;margin:0 0 20px 0;font-family: Arial, Helvetica, sans-serif; color: #B46063; font-weight: bold;">Hola por aquí, ¿cómo estás?</h1>
										<p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family: Arial, Helvetica, sans-serif;">
                                        ¡Volvemos a encontrarnos!</p>
										<p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family: Arial, Helvetica, sans-serif;">
										Te prometí que te enviaría contenido súper valioso basado en la etapa en la que tu proyecto se encuentra. En base a los resultados que arrojó tu test, decidí compartir con vos esta guía llamada:</p>
@switch ($testresult->selection)
@case("comenzar")
										<p style="margin:0 0 12px 0;font-size:14px;line-height:24px;font-family: Arial, Helvetica, sans-serif;"><a style="text-decoration: none; background-color: #B46063; color: #fff; padding: 10px 20px; border-radius: 50px; font-weight: bold;" href="{{ asset('guias/Guía 1 - ¿Cómo construir una marca de forma estratégica_.pdf') }}">Cómo construir una marca de forma estratégica sin perder la esencia</a>
										</p>
										<div style="height:20px"></div>
										<p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family: Arial, Helvetica, sans-serif;">Este material está diseñado especialmente para que puedas construir tu marca a partir de propuestas auténticas, destacando los valores y la esencia de tu emprendimiento.</p>
										<p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family: Arial, Helvetica, sans-serif;">Estate atenta al correo porque, dentro de pocos días te enviaré un nuevo mail contándote mi propia experiencia construyendo mi Marca Personal junto a mis aciertos y desaciertos de la mano con los primeros emprendimientos que impulsé.
										<!-- <br><a href="{{ route('programa-intensivo') }}" style="color: #b46063;font-weight: bold;">¡Hacé click para encontrar más información!</a> -->
										</p>
  @break
@case("mejorar")
										<p style="margin:0 0 12px 0;font-size:12px;line-height:24px;font-family: Arial, Helvetica, sans-serif;"><a style="text-decoration: none; background-color: #B46063; color: #fff; padding: 10px 20px; border-radius: 50px; font-weight: bold;" href="{{ asset('guias/Guía 2 - ¿Cómo consolidar tu marca en el universo digital_.pdf') }}">Cómo consolidar tu marca en el universo digital a través de propuestas auténticas</a>
										</p>
										<div style="height:20px"></div>
										<p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family: Arial, Helvetica, sans-serif;">Este material está diseñado especialmente para que puedas consolidar tu marca en el universo digital, repasando las áreas estratégicas que van a ayudarte a elevar su esencia, conectar con la audiencia ideal y mejorar resultados.</p>
										<p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family: Arial, Helvetica, sans-serif;">Estate atenta al correo porque, dentro de pocos días te enviaré un nuevo mail contándote mi propia experiencia sentando las bases de mi marca y trabajando en su posicionamiento online.
										<!-- <br><a href="{{ route('mentoria') }}#mentoria-propuestas" target="_blank" style="color: #b46063;font-weight: bold;">¡Hacé click para encontrar más información!</a> -->
										</p>
  @break
@case("crecer")
										<p style="margin:0 0 12px 0;font-size:14px;line-height:24px;font-family: Arial, Helvetica, sans-serif;"><a style="text-decoration: none; background-color: #B46063; color: #fff; padding: 10px 20px; border-radius: 50px; font-weight: bold;" href="{{ asset('guias/Guía 3 - ¿cómo escalar tu negocio digital_.pdf') }}">Cómo escalar tu negocio en el universo digital</a>
										</p>
										<div style="height:20px"></div>
										<p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family: Arial, Helvetica, sans-serif;">Este material está diseñado especialmente para que puedas superar la agenda completa de clientes y escalar tus resultados con productos digitales, ganando el tiempo necesario que te ayudará a llevar tu marca al próximo nivel.</p>
										<p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family: Arial, Helvetica, sans-serif;">Estate atenta al correo porque, dentro de pocos días te enviaré un nuevo mail contándote mi propia experiencia consolidando una estructura digital y creando un modelo de negocio alineado a la vida que quiero vivir, en base a mis tiempos, ritmo y facturación.
										<!-- <br><a href="{{ route('mentoria') }}#mentoria-propuestas" target="_blank" style="color: #b46063;font-weight: bold;">¡Hacé click para encontrar más información!</a> -->
										</p>
  @break
@endswitch
									</td>
								</tr>
								<tr>
									<td style="">
										<table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;font-size:9px;font-family: Arial, Helvetica, sans-serif;">
											<tr>
												<td style="padding:0;width:50%;" align="left">
													<p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family: Arial, Helvetica, sans-serif; color:#B46063; font-weight: bold;">Me encanta acompañarte.<br>
													Un abrazo virtual.<br> Marian.
													</p>
												</td>
												<td style="padding:0;width:50%;" align="right">
													<table role="presentation" style="border-collapse:collapse;border:0;border-spacing:0;">
														<tr>
															<td style="">
																<img src="{{ asset('img/mail/petalo-mail.png') }}" alt="" style="height:auto;display:block;border:0; margin: -44px -35px;" />
															</td>
														</tr>
													</table>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>

</body>
</html>
