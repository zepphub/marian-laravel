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
										<h1 style="font-size:26px;margin:0 0 20px 0;font-family: Arial, Helvetica, sans-serif; color: #B46063; font-weight: bold;">Nueva Consulta</h1>
										<p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family: Arial, Helvetica, sans-serif;">Se realizó una consulta desde tu pagina web.</p>
										<p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family: Arial, Helvetica, sans-serif;">Nombre: {{$firstname}}</p>
										<p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family: Arial, Helvetica, sans-serif;">Apellido: {{$lastname}}</p>
										<p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family: Arial, Helvetica, sans-serif;">Teléfono: {{$phone}}</p>
										<p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family: Arial, Helvetica, sans-serif;">Email: <a href="mailto:{{$email}}">{{$email}}</p>
										<p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family: Arial, Helvetica, sans-serif;">Consulta:</p>
										<p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family: Arial, Helvetica, sans-serif; white-space:pre-wrap;">{{$query}}</p>
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
