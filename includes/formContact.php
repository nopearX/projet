<?php
if(isset($_POST['sendmail']))
{
	if(!empty($_POST['Nom']) && !empty($_POST['Email']) && !empty($_POST['Commentaire']))
	{
		$header="MIME-Version: 1.0\r\n";
		$header.='From:"PrimFX.com"<support@primfx.com>'."\n";
		$header.='Content-Type:text/html; charset="uft-8"'."\n";
		$header.='Content-Transfer-Encoding: 8bit';

		$message='
		<html>
			<body>
				<div align="center">
					<br />
					<u>Nom de l\'expéditeur :</u>'.$_POST['nom'].'<br />
					<u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br />
					<br />
					'.nl2br($_POST['message']).'
					<br />
				</div>
			</body>
		</html>
		';

		mail(contact@handimaps.fr, "CONTACT - handimaps.fr", $message, $header);
		$msg="Votre message a bien été envoyé !";
		echo 'envoyé';
	}
	else
	{
		$msg="Tous les champs doivent être complétés !";
	}
}

		?>
